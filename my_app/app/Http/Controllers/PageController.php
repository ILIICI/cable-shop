<?php

namespace App\Http\Controllers;

use Exception;
use App\Helper\HelperClass;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\ModelSmartphone;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ItemNotFoundException;
use Illuminate\Support\Facades\Request as Req;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function description(){
        $currentURL = Req::segment(2);
        $data = ModelSmartphone::where('slug', $currentURL)
            ->get(['model_name','modelsmartphone_id', 'price', 'slug', 'description'])
            ->firstOrFail();
        return view('pages.desc')->with('parameters', $data);
    }

    public function search(Request $request, Exception $exception){
        $obejct = new HelperClass;
        $query  = $obejct->filterQuery($request->input('query'));

        try {
            $data = ModelSmartphone::where('model_name', 'LIKE', "%{$query}%")
            ->get(['model_name','modelsmartphone_id','price', 'slug', 'description']);
            if($data->count() == 1 ){
                return view('pages.desc')->with('parameters', $data);
            }elseif($data->count() > 1){
                return view('pages.multi_desc')->with('parameters', $data);
            }elseif($data->count() < 1){
                $last_obj = new HelperClass;
                $last_query  = $last_obj->getFirstChars($request->input('query'));
                $data = ModelSmartphone::where('model_name', 'LIKE', "{$last_query}%")
                ->get(['model_name','modelsmartphone_id','price', 'slug', 'description']);
                return view('pages.multi_desc')->with('parameters', $data);
            }
        } catch (ItemNotFoundException $exception) {
            return url('yandex.net');
        }
    }
    public function checkout(){
        \Cart::session(Session::getId());
        $items = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('pages.checkout')->with('cart',$items)->with('sum',$sum);
    }

}