<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentalidController extends Controller
{

    public function index()
    {

        return view('frontend.fiche_patient');
    }
}
