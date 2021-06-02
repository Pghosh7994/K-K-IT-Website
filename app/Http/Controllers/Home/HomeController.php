<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function development(){
        return view('development');
    }
    public function digitalmarketing(){
        return view('digitalmarketing');
    }
    public function graphicsdesing(){

        return view('graphicsdesing');
    }
}
