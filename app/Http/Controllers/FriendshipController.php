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

    public function show($name){
        if (User::where('name','=',$name) != null){
            return User::where('name','=',$name);
        }
        else{
            return null;
        }
    }

    public function acceptRequest($id){
        Friendship::where('id','=',$id)->update(['status'],['confirmed']);
    }

    public function addFriend($id){
        Friendship::create(array('first_user' => Auth::user()->id,'second_user' => $id,'acted_user' => Auth::user()->id,'status' => 'pending'));
    }

    public function deleteFriends($id){
        Friendship::destroy($id);
    }
}
