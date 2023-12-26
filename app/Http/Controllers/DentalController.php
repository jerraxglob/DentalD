<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentalController extends Controller
{

    public function dashboard()
    {

        return view('frontend.dashboard');
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
        return view('frontend.11th_page');
    }
}
