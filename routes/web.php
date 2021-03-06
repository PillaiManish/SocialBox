<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[BasicController::class,'index'])->middleware('auth')->name('home');

Route::get('login',[AccountController::class,'get_login'])->name('login')->middleware('guest');
Route::post('login',[AccountController::class,'post_login']);

Route::get('register',[AccountController::class,'get_register'])->middleware('guest');
Route::post('register',[AccountController::class,'post_register']);

Route::get('logout',[AccountController::Class,'get_logout'])->middleware('auth');


Route::get('friend',[FriendController::Class,'get_friend']);
Route::get('findfriend',[FriendController::Class,'get_findfriend']);
Route::post('findfriend',[FriendController::Class,'post_findfriend']);
Route::get('sendrequest/{id}',[FriendController::Class,'get_sendrequest']);
Route::get('acceptrequest/{id}',[FriendController::Class,'get_acceptrequest']);

Route::get('post',[PostController::Class,'get_post']);
Route::post('post',[PostController::Class,'post_post']);


