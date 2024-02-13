<?php

use App\Http\Controllers\DonationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/get-snap-token',[DonationsController::class,'createSnapToken']);
Route::post('/create',[DonationsController::class,'create']);
Route::post('/update',[DonationsController::class,'update']);
