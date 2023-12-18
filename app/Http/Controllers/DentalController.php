<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentalController extends Controller
{
    public function patient_profile()
    {

        return view('frontend.1st_page');
    }
    public function doctor_profile()
    {


        return view('frontend.3rd_page');
    }
    public function Financial_report()
    {
        return view('frontend.4th_page');
    }
    public function Stock_management()
    {

        return view('frontend.5th_page');
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
