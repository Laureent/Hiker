<?php

namespace App\Http\Controllers;


use App\Models\Trail;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * @param $id
     * @return mixed
     * A paraméterben kapott ID alapján megjeleníti az útvonalhoz tartozó képfeltöltési űrlapot.
     */

    public function index($id)
    {
        return view('admin.upload', [
            'user' => Auth::user(),
            'id' => $id,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     * A paraméterben kapott adatokat validálja, nem megfelelő adat esetén hibát ad vissza.
     * Megfelelő adat esetén feltölti a képet az "img" mappába, majd ID alapján hozzá adja a kép nevét az útvonalhoz, ez után megjeleníti a kép feltöltési űrlapot.
     */

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

    /**
     * @param $id
     * @return mixed
     * A paraméterben kapott ID alapján törli a kép nevét az adatbázisból, majd megjeleníti az előtő oldalt.
     */

    public function delete($id){
        $path = '/img/Trails/'.Trail::find($id)->img;
        Trail::find($id)->update(['img' => null]);
        if (File::exists($path)){
            File::delete($path);
        }
        return back();
    }
}
