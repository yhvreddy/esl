<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalsController extends Controller
{

    public function HospitalTypeIndex(){
        return view('admin.hostpital_types_page');
    }

    public function HospitalSpecializationIndex(){
        return view('admin.hostpital_specialization_page');
    }

}
