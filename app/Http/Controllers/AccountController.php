<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AccountController extends Controller
{
    // Get request on login page
    public function get_login(){
        return view('account.login');
    }

    // Post Request on login page
    public function post_login(Request $request){
        $email      =   $request->input('email');
        $password   =   $request->input('password'); 
        
        Auth::attempt(['email'=>$email,'password'=>$password]);
        return redirect('/');
    }

    // Get request on register page
    public function get_register(){
        return view('account.register');
    }

    // Post request on register page
    public function post_register(Request $request){
        $name       =   $request->input('name');
        $email      =   $request->input('email');
        $password   =   PASSWORD_HASH($request->input('password'),PASSWORD_BCRYPT);
        User::create(['name'=>$name,'email'=>$email,'password'=>$password]);
        return redirect()->route('login');
    }

    // Get request on login page
    public function get_logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
