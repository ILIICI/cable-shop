<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    public $title, $price, $id, $images, $shortdesc, $techdesc;
        /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $price, $id , $images, $shortdesc, $techdesc) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->images = $images;
        $this->shortdesc = $shortdesc;
        $this->techdesc = $techdesc;
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