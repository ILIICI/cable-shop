<?php

namespace App\Http\Controllers;

use App\Models\ModelSmartphone;
use Illuminate\Http\Request;

class ModelSmartphoneController extends Controller
{
    public static function getPhoneModels(){
        $listOfModels = ModelSmartphone::all(['smartphone_id','model_name','slug']);
        return $listOfModels;
    }
}