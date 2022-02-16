<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDescriptionController extends Controller
{
    public function index(){
        
        return view('pages.desc');
    }
}