<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NationalParksController extends Controller
{
    public function index(){
        return view('hiker.NationalParks');
    }
}
