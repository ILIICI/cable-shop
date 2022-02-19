<?php

namespace App\Http\Controllers;


use Cart;
use Illuminate\Http\Request;
use App\Models\ModelSmartphone;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $req){
        $product = ModelSmartphone::where('modelsmartphone_id',$req->id)->first();
        \Cart::session(Session::getId())->add([
            'id' => $product->modelsmartphone_id,
            'name' => $product->model_name,
            'price' => $product->price,
            'quantity' => 1,
        ]);
        $items = \Cart::getContent();
        return redirect()->back();
    }

}