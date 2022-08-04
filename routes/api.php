<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\DoctorsAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//----------------------------Login & Logout----------------------------//
Route::post('/login', [LoginAPIController::class, 'login']);
Route::post('/logout', [LoginAPIController::class, 'logout']);
Route::post('/registration', [LoginAPIController::class, 'registration']);

//----------------------------Doctors----------------------------//
Route::get('/homeDoctor', [DoctorsAPIController::class, 'homeDoctor']);
Route::get('/doctorProfile', [DoctorsAPIController::class, 'doctorProfile']);
Route::post('/doctorFee', [DoctorsAPIController::class, 'doctorFee']);
Route::get('/prescriptionsList', [DoctorsAPIController::class, 'prescriptionsList']);