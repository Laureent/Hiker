<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrailStoreRequest;
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

    public function destroy($id){
        Trail::find($id)->delete();
        return redirect(route('trails.index'));
    }
}
