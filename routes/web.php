<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;

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
Route::get('/', [WebController::class, 'index']);
Route::get('/channel/{var1}', [WebController::class, 'category']);
Route::get('/admin', [WebController::class, 'admin']);
Route::get('/login', [WebController::class, 'login']);
Route::get('/formuser', [WebController::class, 'formUser']);
Route::get('/newpost', [WebController::class, 'newPost']);
Route::get('/formkategori', [WebController::class, 'formKategori']);
Route::get('/edituser', [WebController::class, 'editUser']);
Route::get('/formiklan', [WebController::class, 'formiklan']);

//Route Function Login
Route::post('/doLogin', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

//Route Function All Role
Route::post('/createPost', [WebController::class, 'createPost']);

//Route Function User
Route::post('/createUser', [UserController::class, 'createUser']);

//Route Function Admin
Route::post('/createUserAdmin', [AdminController::class, 'createUser']);
Route::get('/getuser', [AdminController::class, 'getAllDataUser']);
Route::post('/createCategory', [AdminController::class, 'createCategory']);
Route::post('/createiklan', [AdminController::class, 'createIklan']);
