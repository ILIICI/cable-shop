<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\ModelSmartphoneController;
use Illuminate\Support\Facades\Session;

class HeaderCart extends Component
{
    public function render()
    {
        $model = new ModelSmartphoneController();
        $brand = new SmartphoneController();
        \Cart::session(Session::getId());
        $items = \Cart::getContent();
        $sum = \Cart::getTotal('price');


        return view('livewire.header-cart')
            ->with('models', $model->getModels())
            ->with('brands', $brand->getBrands())
            ->with('cart', $items)
            ->with('sum', $sum);
    }
    public function deleteFromCart($id)
    {
        \Cart::session(Session::getId())->remove($id);
    }
    public function increase($id)
    {
        \Cart::session(Session::getId())->update($id, array('quantity' => 1,));
    }
    public function decrease($id)
    {
        \Cart::session(Session::getId())->update($id, array('quantity' => -1,));
    }
}