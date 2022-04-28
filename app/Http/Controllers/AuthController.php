<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Megjeleníti a bejelentkezési űrlapot.
     */

    public function login(){
        return view("auth.login");
    }

    /**
     * @param LoginRequest $request
     * A paraméterben megkapja az email címet és felhasználó nevet.
     * @return mixed
     * Validálja a paramétereket, majd megpróbálja beléptetni a felhasználót, ha sikeres megjeleníti a főoldalt, ha nem hibaüzenetet ad vissza.
     */

    public function authenticate(LoginRequest $request){
        $data = $request->validated([

        ]);

        if(!Auth::attempt($data)){
            $request->session()->flash("danger","Sikertelen bejelentkezés.");
            return redirect()->route("auth.login");
        }

        $request->session()->flash("success","Sikeres bejelentkezés");
        return redirect()->route("home");
    }

    /**
     * @param Request $request
     * @return mixed
     * A paraméterben kap egy kilépési kérelmet, majd kilépteti a felhasználót és átirányítja a kezdő felületre.
     */

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("welcome");
    }
}
