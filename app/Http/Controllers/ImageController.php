<?php

namespace App\Http\Controllers;


use App\Models\Trail;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function index($id)
    {
        return view('admin.upload', [
            'user' => Auth::user(),
            'id' => $id,
        ]);
    }

    public function store(Request $request,$id)
    {
        $request->validate([
            'image.*' => ['required','mimes:jpeg,png,jpg','image'],
        ]);
        if ($file = $request->hasFile('image')) {

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            Trail::find($id)->update(['img' => $fileName]);
            $destinationPath = public_path() . '/img/Trails';
            $file->move($destinationPath, $fileName);
            return back()
                ->with('success','Sikeres képfeltöltés!')
                ->with('image',$fileName);
        }
        return back();
    }

    public function delete($id){
        $path = '/img/Trails/'.Trail::find($id)->img;
        Trail::find($id)->update(['img' => null]);
        if (File::exists($path)){
            File::delete($path);
        }
        return back();
    }
}
