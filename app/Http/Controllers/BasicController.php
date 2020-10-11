<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;
use App\Models\Post;
use Auth;



class BasicController extends Controller
{
    public function index(){
        $user_post         = User::select('id')->find(Auth::id());
        $to_friend_post    = Friend::select('s_user_id as id')->where('p_user_id','=',Auth::id())->where('status','=','accepted')->get();
        $from_friend_post  = Friend::select('p_user_id as id')->where('s_user_id','=',Auth::id())->where('status','=','accepted')->get();
        $all               = $to_friend_post->merge($from_friend_post);
        $posts             = Post::whereIn('user_id',$all)->orderBy('created_at','desc')->get();
        return view("basic.index",compact('posts'));
    }
}
