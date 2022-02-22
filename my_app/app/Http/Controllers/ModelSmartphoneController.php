<?php

namespace App\Http\Controllers;

use App\Models\ModelSmartphone;

class ModelSmartphoneController extends Controller
{
    public function getModels()
    {
        return ModelSmartphone::all();
    }
}