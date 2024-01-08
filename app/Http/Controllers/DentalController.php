<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentalController extends Controller
{

    public function dashboard()
    {
        $data = User::all();
        return view('frontend.dashboard', compact('data'));
    }
    public function statistics()
    {
        return view('frontend.statistics');
    }
    public function Inventory()
    {

        return view('frontend.inventory');
    }
    public function orders()
    {
        return view('frontend.order');
    }
    public function Patient_list()
    {
        return view('frontend.patients');
    }
    public function calander()
    {
        return view('frontend.calander');
    }
    public function assigned_tasks()
    {
        return view('frontend.tasks');
    }
    public function invoicing()
    {
        return view('frontend.invoicing');
    }
    public function setting()
    {
        return view('frontend.setting');
    }
    public function update_order()
    {
        return view('frontend.updateorder');
    }

    public function Patient_sheet()
    {
        return view('frontend.patient_sheet');
    }
}