<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    // All function in this page have access only after login 
    public function __construct(){
        $this->middleware('auth');
    }

    // Get request on friend page
    public function get_friend(){
        $friends   = User::all()->except(Auth::id());
        return view('friend.index',compact('friends'));
    }

    // Get Request on New friend page
    public function get_newfriend(){
        return view('friend.newfriend');
    }
}
