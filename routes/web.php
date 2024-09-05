<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

route::redirect('/home', '/');

// Route::view('/home', 'home');
Route::view('/about', 'about');

Route::get('/profile/{name}', function ($name) {
    // echo $name;
    return view('profile', ['name' => $name]);
});

Route::get('user', [UserController::class, 'getUser']);
Route::get('user/{name}', [UserController::class, 'getUserName'],);

Route::get('contact-us', [UserController::class, 'contactUs']);
Route::get('user-details/{name}', [UserController::class, 'userDetails']);

Route::get('admin', [UserController::class, 'adminLogin']);
