<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\AccountController;


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

Route::get('/',[BasicController::class,'index'])->middleware('auth');

Route::get('/login',[AccountController::class,'get_login'])->name('login');
Route::post('/login',[AccountController::class,'post_login']);

Route::get('/register',[AccountController::class,'get_register']);
Route::post('/register',[AccountController::class,'post_register']);
