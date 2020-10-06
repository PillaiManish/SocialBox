<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function get_login(){
        return view('account.login');
    }

    public function post_login(Request $request){
        $username   =   $request->input('username');
        $password   =   $request->input('password');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        return $username. " ".$password;
    }

    public function get_register(){
        return view('account.register');
    }

    public function post_register(Request $request){
        $username   =   $request->input('username');
        $name       =   $request->input('name');
        $email      =   $request->input('email');
    }
}
