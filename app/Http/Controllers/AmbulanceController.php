<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmbulanceController extends Controller
{

    public function AmbulanceTypeIndex(){
        return view('admin.ambulance_types_page');
    }

}
