<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    //
    public function index()
    {
        $data="data here";
        $patients=15;

        return view('reception.home', compact('data','patients'));
    }
    public function PatientsList()
    {
        $data="data here";
        $patients=15;

        return view('reception.patients', compact('data','patients'));
    }
}
