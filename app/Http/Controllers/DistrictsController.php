<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistrictsController extends Controller
{

    public function DistrictIndex(){
        return view('admin.districts_page');
    }

}
