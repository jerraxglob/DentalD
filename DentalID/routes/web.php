<?php

use App\Http\Controllers\DentalidController;
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
    return view('frontend.partials.main');
});
route::get('/1st_page', [DentalidController::class, 'patient_profile'])->name('1st_page');
route::get('/2nd_page', [DentalidController::class, 'doctor_profile'])->name('2nd_page');
route::get('/3rd_page', [DentalidController::class, 'Financial_report'])->name('3rd_page');
route::get('/4th_page', [DentalidController::class, 'Stock_management'])->name('4th_page');
route::get('/5th_page', [DentalidController::class, 'orders'])->name('5th_page');
route::get('/6th_page', [DentalidController::class, 'Patient_list'])->name('6th_page');