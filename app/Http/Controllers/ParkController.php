<?php

namespace App\Http\Controllers;

use App\Models\Nationalpark;
use App\Models\Trail;
use Illuminate\Support\Facades\Auth;

class ParkController extends Controller
{
    public function index(){
        return view('parks.index',[
            'user' => Auth::user(),
            'parks' => Nationalpark::all(),
        ]);
    }
    public function show($name){
        return view('parks.show',[
            'park'=>Nationalpark::where('name',$name)->first(),
            'user' => Auth::user(),
            'trails' => Trail::where('nationalpark',$name)->get(),
        ]);
    }
}
