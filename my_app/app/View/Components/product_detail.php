<?php

namespace App\View\Components;

use Illuminate\View\Component;

class product_detail extends Component
{
    public $id,$title,$price,$description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$title,$price,$description)
    {
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
    public function render()
    {
        return view('components.product_detail');
    }
}