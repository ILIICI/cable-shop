<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function getModels()
    {
        return Product::all();
    }
}