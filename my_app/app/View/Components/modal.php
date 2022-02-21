<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    public $title, $price, $description, $id;
        /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $price, $description, $id) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(){
        return view('components.modal');
    }

}