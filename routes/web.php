<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PrescriptionsController;
use App\Http\Controllers\PharmaceuticalItemsController;

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
Route::get('/homeDoctor', [DoctorsController::class, 'homeDoctor'])->name('homeDoctor')->middleware('ValidDoctors');
Route::get('/doctorFee', [DoctorsController::class, 'doctorFee'])->name('doctorFee')->middleware('ValidDoctors');
Route::post('/doctorFee', [DoctorsController::class, 'doctorFeeSubmit'])->name('doctorFee')->middleware('ValidDoctors');
Route::get('/prescriptions', [PrescriptionsController::class, 'prescriptions'])->name('prescriptions')->middleware('ValidDoctors');
Route::post('/prescriptions', [PrescriptionsController::class, 'prescriptionsSubmit'])->name('prescriptions')->middleware('ValidDoctors');
Route::get('/pharmaceuticalItems', [PharmaceuticalItemsController::class, 'pharmaceuticalItems'])->name('pharmaceuticalItems')->middleware('ValidDoctors');
Route::post('/pharmaceuticalItems', [PharmaceuticalItemsController::class, 'pharmaceuticalItemsSubmit'])->name('pharmaceuticalItems')->middleware('ValidDoctors');