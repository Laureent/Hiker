<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view("register.create");
    }

    public function store(RegisterStoreRequest $request){
        $data = $request->validated();
        $data["password"] = Hash::make($data["password"]);
        User::create($data);

        $request->session()->flash("success","Sikeres regisztáricó!");

        return redirect()->route("home");
    }
}
