<?php

namespace App\Http\Controllers;

use Exception;
use App\Helper\HelperClass;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubcategoryModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ItemNotFoundException;

use Illuminate\Support\Facades\Request as Req;

class PageController extends Controller
{
    public function index()
    {
        $data = Product::paginate(8);
        return view('pages.index')->with('parameters', $data);;
    }

    public function productDetails()
    {
        $currentURL = Req::segment(2);
        $data = Product::where('slug', $currentURL)
            ->get()->firstOrFail();
        return view('pages.product_details')->with('parameters', $data);;
    }

    public function search(Request $request, Exception $exception)
    {
        $obejct = new HelperClass;
        $query  = $obejct->filterQuery($request->input('query'));

        try {
            $data = Product::where('product_name', 'LIKE', "%{$query}%")->get();
            if ($data->count() == 1) {
                return view('pages.desc')->with('parameters', $data);
            } elseif ($data->count() > 1) {
                return view('pages.multi_desc')->with('parameters', $data);
            } elseif ($data->count() < 1) {
                $last_obj = new HelperClass;
                $last_query  = $last_obj->getFirstChars($request->input('query'));
                $data = Product::where('product_name', 'LIKE', "{$last_query}%")->get();
                return view('pages.multi_desc')->with('parameters', $data);
            }
        } catch (ItemNotFoundException $exception) {
            return url('yandex.net');
        }
    }
    public function checkout()
    {
        \Cart::session(Session::getId());
        $items = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('pages.checkout')->with('cart', $items)->with('sum', $sum);
    }
    public function category()
    {
        $currentURL = Req::segment(3);
        $subcategory = SubcategoryModel::where('slug', $currentURL)->get('id');
        $product = Product::where('sugcategory_id',$subcategory[0]->id)->paginate(6);

        return view('pages.shoplist')->with('product',$product);
    }
}