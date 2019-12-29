<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{

    public function CityIndex(){
        return view('admin.cities_page');
    }

}
