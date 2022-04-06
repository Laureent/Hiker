<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HikerController extends Controller
{
    public function welcome(){
        return view('index');
    }
    public function index(){
        return view('hiker.index');
    }
}
