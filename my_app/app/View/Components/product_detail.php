<?php

namespace App\View\Components;

use Illuminate\View\Component;

class product_detail extends Component
{
    public $id,$title,$price,$description,$instock,$sncode,$images,$shortdesc,$techdesc,$longdesc;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$title,$price,$description,$instock,$sncode,$images,$shortdesc,$techdesc,$longdesc)
    {
      $this->id = $id;
      $this->title = $title;
      $this->price = $price;
      $this->instock = $instock;
      $this->sncode= $sncode;
      $this->images = $images;
      $this->description = $description;
      $this->shortdesc = $shortdesc;
      $this->techdesc = $techdesc;
      $this->longdesc = $longdesc;
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