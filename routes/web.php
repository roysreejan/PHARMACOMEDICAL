<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PagesController;

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

//----------------------------Login&Registration----------------------------//
Route::get('/login', [PagesController::class, 'login']);
Route::post('/login', [PagesController::class, 'loginSubmit'])->name('login');
Route::get('/logout', [PagesController::class, 'logout'])->name('logout');

Route::get('/registration', [PagesController::class, 'registration'])->name('registration');
Route::post('/registration', [PagesController::class, 'registrationSubmit'])->name('registration');

//----------------------------Doctors----------------------------//
Route::get('/doctors/homeDoctor', [DoctorsController::class, 'homeDoctor'])->name('homeDoctor')->middleware('ValidDoctors');