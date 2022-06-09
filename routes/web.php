<?php

use Illuminate\Support\Facades\Route;
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

//Route View
Route::get('/', function () {
    return view('content.home');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', function () {
    return view('auth.login');
});

//Route Function
Route::post('/doLogin', [LoginController::class, 'authenticate']);
Route::get('/doLogout', [LoginController::class, 'logout']);