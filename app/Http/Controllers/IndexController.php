<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function shoplistslider(){
        return view('shop-list-slider');
    }
}
