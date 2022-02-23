<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $req)
    {

        $product = Product::where('product_uuid', $req->id)->first();
        \Cart::session(Session::getId())->add([
            'id' => $product->product_uuid,
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => $req->qty ?? 1,
        ]);
        $items = \Cart::getContent();
        return redirect()->back();
    }
}