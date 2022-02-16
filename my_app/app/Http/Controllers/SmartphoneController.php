<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public static function getAllBrands(){

        $listOfBrands = Smartphone::all(['id','brand_name']);
        return $listOfBrands;
    }
}