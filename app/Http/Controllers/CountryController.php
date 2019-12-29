<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function CountriesIndex(){
        return view('admin.countries_page');
    }

}
