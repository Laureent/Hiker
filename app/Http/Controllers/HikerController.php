<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HikerController extends Controller
{
    /**
     * @return mixed
     * Megjeleníti a kezdő felületet.
     */

    public function welcome(){
        return view('index');
    }

    /**
     * @return mixed
     * Megjeleníti a főoldalt.
     */

    public function index(){
        return view('hiker.index',[
            'user' => Auth::user(),
        ]);
    }
}
