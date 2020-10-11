<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    // All function in this page have access only after login 
    public function __construct(){
        $this->middleware('auth');
    }

    // Get Request on Post Page
    public function get_post(){
        $posts     = Post::where('user_id','=',Auth::id())->orderBy('created_at','desc')->get();
        return view('post.index',compact('posts'));
    }

    // Post Request on Post Page
    public function post_post(Request $request){
        $title      = $request->input('title');
        $content    = $request->input('content');
        Post::create(['user_id'=>Auth::id(),'title'=>$title,'content'=>$content]);
        return redirect()->back();
    }
}