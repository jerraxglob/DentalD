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
        return view('frontend.6th_page');
    }
    public function Patient_list()
    {
        return view('frontend.7th_page');
    }
    public function calander()
    {
        return view('frontend.8th_page');
    }
    public function assigned_tasks()
    {
        return view('frontend.9th_page');
    }
    public function Invoicing()
    {
        return view('frontend.10th_page');
    }
    public function setting()
    {
        return view('frontend.11th_page');
    }
}
