<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Models\ModelSmartphone;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $req)
    {
        $model_smartphone = ModelSmartphone::where('modelsmartphone_id', $req->id)->first();
        \Cart::session(Session::getId())->add([
            'id' => $model_smartphone->modelsmartphone_id,
            'name' => $model_smartphone->model_name,
            'price' => $model_smartphone->price,
            'quantity' => $req->qty ?? 1,
        ]);
        $items = \Cart::getContent();
        return redirect()->back();
    }
}