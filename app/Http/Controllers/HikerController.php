<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HikerController extends Controller
{
    public function index(){
        return view('hiker.index');
    }
}
