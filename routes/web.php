<?php

use App\Http\Controllers\DentalController;
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
    return view('frontend.fiche_patient');
});

route::get('/dashboard', [DentalController::class, 'dashboard'])->name('dashboard');
route::get('/statistics', [DentalController::class, 'statistics'])->name('statistics');
route::get('/inventory', [DentalController::class, 'inventory'])->name('inventory');
route::get('/6th_page', [DentalController::class, 'orders'])->name('6th_page');
route::get('/7th_page', [DentalController::class, 'Patient_list'])->name('7th_page');
route::get('/8th_page', [DentalController::class, 'calander'])->name('8th_page');
route::get('/9th_page', [DentalController::class, 'assigned_tasks'])->name('9th_page');
route::get('/10th_page', [DentalController::class, 'Invoicing'])->name('10th_page');
route::get('/11th_page', [DentalController::class, 'setting'])->name('11th_page');
