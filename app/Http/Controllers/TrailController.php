<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrailStoreRequest;
use App\Http\Requests\TrailUpdateRequest;
use App\Models\Trail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrailController extends Controller
{
    public function index(Request $request){
        if($request->has('difficulty')){
            if($request->difficulty != 'Összes') {
                return view('trails.index', [
                    'trails' => Trail::where('difficulty',$request->difficulty)->get(),
                    'user' => Auth::user(),
                ]);
            }else{
                return view('trails.index', [
                    'trails' => Trail::all(),
                    'user' => Auth::user(),
                ]);
            }
        }else{
            return view('trails.index', [
                'trails' => Trail::all(),
                'user' => Auth::user(),
            ]);
        }
    }

    public function show($id){
        return view('trails.show',[
            'trail' => Trail::find($id),
            'user' => Auth::user(),
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

    public function showUpdate($id){
        return view('admin.update',[
            'user' => Auth::user(),
            'trail' => Trail::find($id),
        ]);
    }

    public function update(TrailUpdateRequest $request,$id){
        $data = $request->validated();
        $filtered = array_filter(array_map('trim', $data), 'strlen');
        Trail::where('id',$id)->first()->update($filtered);
        session()->flash('success',"Sikeres módosítás!");
        return redirect()->route('admin.update',['id' => $id]);
    }

    public function destroy($id){
        Trail::find($id)->delete();
        session()->flash('success',"Sikeres törlés!");
        return redirect()->route('trails.index');
    }
}
