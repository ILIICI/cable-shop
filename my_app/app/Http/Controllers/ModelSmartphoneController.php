<?php

namespace App\Http\Controllers;

use App\Models\ModelSmartphone;
use Illuminate\Http\Request;

class ModelSmartphoneController extends Controller
{
    public function getModels(){
        return ModelSmartphone::all();
    }
}