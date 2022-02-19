<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\ModelSmartphoneController;
use Illuminate\Support\Facades\Session;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
/*         $model = new ModelSmartphoneController();
        $brand = new SmartphoneController();
        \Cart::session(Session::getId());
        $items = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('components.navbar')
            ->with('models',$model->getModels())
            ->with('brands',$brand->getBrands())
            ->with('cart',$items)
            ->with('sum',$sum); */
    }
}