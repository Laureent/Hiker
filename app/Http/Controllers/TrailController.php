<?php

namespace App\Http\Controllers;

use App\Models\Trail;
use Illuminate\Http\Request;

class TrailController extends Controller
{
    public function index(){
        return view('trails.index',[
            'trails' => Trail::all(),
        ]);
    }

    public function show($id){
        return view('trails.show',[
            'trail' => Trail::find($id),
        ]);
    }
}
