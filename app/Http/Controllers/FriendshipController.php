<?php

namespace App\Http\Controllers;

use App\Models\Friendship;
use Illuminate\Http\Request;

class FriendshipController extends Controller
{
    private function CheckFriend($user1, $user2)
    {
        Friendship::select();
    }

    public function AddFriend()
    {
        if(!$this->CheckFriend())
        {

        }
        else
        {

        }
    }

    public function DeleteFriend()
    {

    }
}
