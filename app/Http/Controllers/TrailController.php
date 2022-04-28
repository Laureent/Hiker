<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrailStoreRequest;
use App\Http\Requests\TrailUpdateRequest;
use App\Models\Trail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrailController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     * A paraméterben kapott nehézség szerint jeleníti meg az útvonalakat.
     * Ha nincs paraméter az összes útvonalat megjeleníti.
     */

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

    /**
     * @param $id
     * @return mixed
     * A paraméterben kapott ID alapján jelenít meg egy útvonalat.
     */

    public function show($id){
        return view('trails.show',[
            'trail' => Trail::find($id),
            'user' => Auth::user(),
        ]);
    }

    /**
     * @return mixed
     * Megjeleníti az űrlapot, amivel útvonalat lehet hozzáadni az adatbázishoz.
     */

    public function create(){
        return view('admin.create',[
            'user' => Auth::user(),
        ]);
    }

    /**
     * @param TrailStoreRequest $request
     * @return mixed
     * A paraméterben kapott adatokat validálja, nem megfelelő adat esetén hibát ad vissza.
     * Megfelelő adatok esetén hozzá ad egy új útvonalat az adatbázishoz, majd megjeleníti az útvonal űrlapot.
     */

    public function store(TrailStoreRequest $request){
        $data = $request->validated();
        Trail::create($data);
        session()->flash('success',"Sikeres hozzáadás!");
        return view('admin.create',[
            'user' => Auth::user(),
        ]);
    }

    /**
     * @param $id
     * @return mixed
     * A paraméterben kapott ID alapján megjeleníti az útvonalhoz tartozó adatmódosító űrlapot.
     */

    public function showUpdate($id){
        return view('admin.update',[
            'user' => Auth::user(),
            'trail' => Trail::find($id),
        ]);
    }

    /**
     * @param TrailUpdateRequest $request
     * @param $id
     * @return mixed
     * A paraméterben kapott adatokat validálja, nem megfelelő adat esetén hibát ad vissza.
     * Ha megfelelőek az adatok, az ID alapján módosítja az útvonalat az adatbázisban, majd megjeleníti a módosító űrlapot.
     */

    public function update(TrailUpdateRequest $request,$id){
        $data = $request->validated();
        $filtered = array_filter(array_map('trim', $data), 'strlen');
        Trail::where('id',$id)->first()->update($filtered);
        session()->flash('success',"Sikeres módosítás!");
        return redirect()->route('admin.update',['id' => $id]);
    }

    /**
     * @param $id
     * @return mixed
     * A paraméterben kapott ID apalján törli az útvonalat az adatbázisból, majd megjeleníti az útvonalakat.
     */

    public function destroy($id){
        Trail::find($id)->delete();
        session()->flash('success',"Sikeres törlés!");
        return redirect()->route('trails.index');
    }
}
