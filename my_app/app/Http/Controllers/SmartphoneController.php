<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function getBrands(){
        return Smartphone::all();
    }
}