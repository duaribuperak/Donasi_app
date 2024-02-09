<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::get('/home', [HomeController::class,'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/cairin', function(){
    return view('cairin');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/kirimin', function(){
    return view('kirimin');
});

Route::get('/duitkeluar', function() {
    return view('duitkeluar');
});

Route::get('/duitmasuk', function() {
    return view('duitmasuk');
});