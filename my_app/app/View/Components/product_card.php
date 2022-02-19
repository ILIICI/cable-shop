<?php

namespace App\View\Components;

use Illuminate\View\Component;

class product_card extends Component
{
    public $parameters;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product_card');
    }
}