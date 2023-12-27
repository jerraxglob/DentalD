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
route::get('/order', [DentalController::class, 'orders'])->name('order');
route::get('/Patients', [DentalController::class, 'Patient_list'])->name('Patients');
route::get('/calendar', [DentalController::class, 'calander'])->name('calander');
route::get('/tasks', [DentalController::class, 'assigned_tasks'])->name('tasks');
route::get('/invoicing', [DentalController::class, 'invoicing'])->name('invoicing');
route::get('/11th_page', [DentalController::class, 'setting'])->name('11th_page');
route::get('/update-order', [DentalController::class, 'update_order'])->name('update_order');
