<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/admin', 'admin.login');

Route::get('/user-home', [UserController::class, 'userHome']);
Route::get('/user-about', [UserController::class, 'userAbout']);
Route::get('/admin-login', [UserController::class, 'adminLogin']);

Route::get('/user/{name}', [UserController::class, 'userDetails']);

Route::get('/admin-register', [UserController::class, 'adminRegister']);
