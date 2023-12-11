<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentalidController extends Controller
{

    public function patient_profile()
    {

        return view('frontend.1st_page');
    }
    public function doctor_profile()
    {


        return view('frontend.2nd_page');
    }
    public function Financial_report()
    {
        return view('frontend.3rd_page');
    }
    public function Stock_management()
    {

        return view('frontend.4th_page');
    }
    public function orders()
    {
        return view('frontend.5th_page');
    }
    public function Patient_list()
    {
        return view('frontend.6th_page');
    }
}
