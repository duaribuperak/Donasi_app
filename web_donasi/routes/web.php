<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DonationsController;

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


Route::middleware('auth')->group(function() {
    Route::get('/home', [HomeController::class,'index']);
    
    Route::get('/kirimin/{username}', [DonationsController::class, 'kirimin']);
    Route::post('/kirimin/{username}', [DonationsController::class, 'kirimin']);
    // Route::get('/cairin', function(){
    //     return view('cairin');    });
    
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/Logout', [LogoutController::class, 'index'])->name('logout');
    
    Route::get('/dashboard', function() {
        return view('dashboard');
    });
    
    
    Route::get('/duitkeluar', [HistoryController::class, 'duitkeluar']);
    Route::get('/duitmasuk', [HistoryController::class, 'duitmasuk']);
    Route::delete('/duitmasuk', [HistoryController::class, 'destroy']);
    Route::delete('/duitkeluar', [HistoryController::class, 'destroy']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');

    Route::post('/login', [AuthController::class, 'authenticate']);
    
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'store']);

});


