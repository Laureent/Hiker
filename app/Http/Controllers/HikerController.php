<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HikerController extends Controller
{
    public function welcome(){
        return view('index');
    }
    public function index(){
        return view('hiker.index',[
            'user' => Auth::user(),
        ]);
    }
}
