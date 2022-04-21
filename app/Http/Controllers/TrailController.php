<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrailStoreRequest;
use App\Models\Trail;
use Illuminate\Support\Facades\Auth;

class TrailController extends Controller
{
    public function index(){
        return view('trails.index',[
            'trails' => Trail::all(),
            'user' => Auth::user(),
        ]);
    }

    public function show($id){
        return view('trails.show',[
            'trail' => Trail::find($id),
        ]);
    }

    public function create(){
        return view('admin.create',[
            'user' => Auth::user(),
        ]);
    }

    public function store(TrailStoreRequest $request){
        $data = $request->validated();
        Trail::create($data);
        session()->flash('success',"Sikeres hozzáadás!");
        return view('admin.create',[
            'user' => Auth::user(),
        ]);


    }
}
