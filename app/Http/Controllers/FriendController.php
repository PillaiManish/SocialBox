<?php

namespace App\Http\Controllers;

use App\Models\Friend;
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
        $to_friends    = Friend::select('p_user_id as id')->where('status','=','Accepted')->where('s_user_id','=',Auth::id())->get();
        $from_friends  = Friend::select('s_user_id as id')->where('status','=','Accepted')->where('p_user_id','=',Auth::id())->get();
        $friends       = $to_friends->merge($from_friends); 
        return view('friend.index',compact('friends'));
    }

    // Get Request on Find friend page
    public function get_findfriend(){
        $friends   = User::all();
        // return $friends;
        return view('friend.findfriend',compact('friends'));
    }

    // Get Request on Send Request Page
    public function get_sendrequest($s_user_id){
        Friend::create(['p_user_id'=>Auth::id(),'s_user_id'=>$s_user_id,'status'=>'Requested','last_updated_by'=>Auth::id()]);
        return redirect()->back();
    }
    // 
    // Get Request on Accept Request Page
    public function get_acceptrequest($s_user_id){
        Friend::where('s_user_id','=',Auth::id())->where('p_user_id','=',$s_user_id)->first()->update(['status'=>'Accepted','last_updated_by'=>Auth::id()]);
        return redirect()->back();
    }
}
