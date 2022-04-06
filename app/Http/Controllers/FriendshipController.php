<?php

namespace App\Http\Controllers;

use App\Models\User;

class FriendshipController extends Controller
{
    public function index(){
        return view('friends.index',[

        ]);
    }
}
