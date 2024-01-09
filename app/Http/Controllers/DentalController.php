<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DentalController extends Controller
{

    public function dashboard()
    {

        return view('Clinics.dashboard');
    }
    public function statistics()
    {
        return view('Clinics.statistics');
    }
    public function Inventory()
    {

        return view('Clinics.inventory');
    }
    public function orders()
    {
        return view('Clinics.order');
    }
    public function Patient_list()
    {
        return view('Clinics.patients');
    }
    public function calander()
    {
        return view('Clinics.calander');
    }
    public function assigned_tasks()
    {
        return view('Clinics.tasks');
    }
    public function invoicing()
    {
        return view('Clinics.invoicing');
    }
    public function setting()
    {
        return view('Clinics.setting');
    }
    public function update_order()
    {
        return view('Clinics.updateorder');
    }

    public function Patient_sheet()
    {
        return view('Clinics.patient_sheet');
    }
}
