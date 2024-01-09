<?php

use App\Http\Controllers\DentalController;
use App\Http\Controllers\backend\DentistController;
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

// Route::get('/', function () {
//     return view('Clinics.fiche_patient');
// })->name('home');

// route::get('/dashboard', [DentalController::class, 'dashboard'])->name('dashboard');
// route::get('/statistics', [DentalController::class, 'statistics'])->name('statistics');
// route::get('/inventory', [DentalController::class, 'inventory'])->name('inventory');
// route::get('/order', [DentalController::class, 'orders'])->name('order');
// route::get('/Patients', [DentalController::class, 'Patient_list'])->name('Patients');
// route::get('/calendar', [DentalController::class, 'calander'])->name('calander');
// route::get('/tasks', [DentalController::class, 'assigned_tasks'])->name('tasks');
// route::get('/invoicing', [DentalController::class, 'invoicing'])->name('invoicing');
// route::get('/setting', [DentalController::class, 'setting'])->name('setting');
// route::get('/update-order', [DentalController::class, 'update_order'])->name('update_order');
// route::get('/Patient-sheet', [DentalController::class, 'Patient_sheet'])->name('Patient_sheet');


Route::get('/', function () {
    return view('Dentists.fiche_patient');
})->name('home');

route::get('/dashboard', [DentistController::class, 'dashboard'])->name('dashboard');
route::get('/statistics', [DentistController::class, 'statistics'])->name('statistics');
route::get('/inventory', [DentistController::class, 'inventory'])->name('inventory');
route::get('/order', [DentistController::class, 'orders'])->name('order');
route::get('/Patients', [DentistController::class, 'Patient_list'])->name('Patients');
route::get('/calendar', [DentistController::class, 'calander'])->name('calander');
route::get('/tasks', [DentistController::class, 'assigned_tasks'])->name('tasks');
route::get('/invoicing', [DentistController::class, 'invoicing'])->name('invoicing');
route::get('/setting', [DentistController::class, 'setting'])->name('setting');
route::get('/update-order', [DentistController::class, 'update_order'])->name('update_order');
route::get('/Patient-sheet', [DentistController::class, 'Patient_sheet'])->name('Patient_sheet');
