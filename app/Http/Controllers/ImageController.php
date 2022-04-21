<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function index()
    {
        return view('admin.upload', [
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image.*' => ['required','mimes:jpeg,png,jpg'],
        ]);
        if ($file = $request->hasFile('image')) {

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/img/Trails';
            $file->move($destinationPath, $fileName);
            return back()
                ->with('success','Sikeres képfeltöltés!')
                ->with('image',$fileName);
        }
        return back();
    }
}
