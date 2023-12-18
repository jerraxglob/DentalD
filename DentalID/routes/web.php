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
    return view('frontend.1st_page');
});

route::get('/3rd_page', [DentalidController::class, 'doctor_profile'])->name('3rd_page');
route::get('/4th_page', [DentalidController::class, 'Financial_report'])->name('3th_page');
route::get('/5th_page', [DentalidController::class, 'Stock_management'])->name('5th_page');
route::get('/6th_page', [DentalidController::class, 'orders'])->name('6th_page');
route::get('/7th_page', [DentalidController::class, 'Patient_list'])->name('7th_page');
route::get('/8th_page', [DentalidController::class, 'calander'])->name('8th_page');
route::get('/9th_page', [DentalidController::class, 'assigned_tasks'])->name('9th_page');
route::get('/10th_page', [DentalidController::class, 'Invoicing'])->name('10th_page');
route::get('/11th_page', [DentalidController::class, 'setting'])->name('11th_page');
