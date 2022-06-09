<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Routing\Controller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    if(Auth::user()){
        return Auth::user()->name . ' - ' . Auth::user()->email . ' - ' .'<img src="'.Auth::user()->foto.'" /> </br> <a href="/logout">Logout</a>';
    } else {
        return view('form_login');
    }
});

//form login
Route::get('/home', function(){
    return view('form_login');
});

//form register
Route::get('/daftar', function(){
    return view('form_register');
});


//Authenticate
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// Controller Login
Route::get('/login',[LoginController::class,'login']);
Route::post('/login/auth',[LoginController::class,'auth_process']);

Route::get('/register',[LoginController::class,'register']);
Route::post('/register/add',[LoginController::class,'add_user']);

Route::post('/logout',[LoginController::class,'logout']);