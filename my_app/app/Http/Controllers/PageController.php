<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelSmartphone;
use Illuminate\Support\Facades\Request as Req;


class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function product(){
        $currentURL = Req::path();
        $data = ModelSmartphone::where('slug', $currentURL)->get(['model_name','price','description'])->firstOrFail();
        return view('pages.desc')->with('parameters',$data);
    }

}