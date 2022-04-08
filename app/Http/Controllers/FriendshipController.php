<?php

namespace App\Http\Controllers;

use App\Models\Friendship;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FriendshipController extends Controller
{
    public function index(){
        return view('friends.index',[
            'user' => Auth::user(),
        ]);
    }

    public function search(){
        return view('friends.search',[
           'user' => Auth::user(),
        ]);
    }

    public function show($name){
        if (User::where('name','=',$name) != null){
            return $user = User::where('name','=',$name);
        }
        else{
            return $user = "Nincs ilyen nevű felhasználó.";
        }
    }

    public function acceptRequest($id){
        Friendship::where('id','=',$id)->update(['status'],['confirmed']);
        return back();
    }

    public function addFriend($id){
        Friendship::create(array('first_user' => Auth::user(),'second_user' => $id,'acted_user' => Auth::user(),'status' => 'pending'));
        return back();
    }

    public function deleteFriend($id){
        Friendship::destroy($id);
        return back();
    }
}
