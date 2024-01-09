<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DentistController extends Controller
{
    
    public function dashboard()
    {

        return view('Dentists.dashboard');
    }
    public function statistics()
    {
        return view('Dentists.statistics');
    }
    public function Inventory()
    {

        return view('Dentists.inventory');
    }
    public function orders()
    {
        return view('Dentists.order');
    }
    public function Patient_list()
    {
        return view('Dentists.patients');
    }
    public function calander()
    {
        return view('Dentists.calander');
    }
    public function assigned_tasks()
    {
        return view('Dentists.tasks');
    }
    public function invoicing()
    {
        return view('Dentists.invoicing');
    }
    public function setting()
    {
        return view('Dentists.setting');
    }
    public function update_order()
    {
        return view('Dentists.updateorder');
    }

    public function Patient_sheet()
    {
        return view('Dentists.patient_sheet');
    }
}
