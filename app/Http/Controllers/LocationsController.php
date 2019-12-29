<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationsController extends Controller
{

    public function LocationIndex(){
        return view('admin.locations_page');
    }

}
