<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @return mixed
     * Megjeleníti a regisztrációs űrlapot.
     */
    public function create(){
        return view("register.create");
    }

    /**
     * @param RegisterStoreRequest $request
     * @return mixed
     * A paraméterben kapott adatokat validálja, nem megfelelő adat esetén hibát ad vissza.
     * Megfelelő adatok esetén létrehoz egy felhasználót az adatbázisban,majd átirányít a bejelentkezési űrlapra.
     */

    public function store(RegisterStoreRequest $request){
        $data = $request->validated();
        $data["password"] = Hash::make($data["password"]);
        User::create($data);

        $request->session()->flash("success","Sikeres regisztáricó!");

        return redirect()->route("home");
    }
}
