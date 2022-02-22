<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;

class SmartphoneController extends Controller
{
    public function getBrands()
    {
        return Smartphone::all();
    }
}