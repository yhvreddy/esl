<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharityController extends Controller
{

    public function CharityTypesIndex(){
        return view('admin.charity_types_page');
    }

    public function CharityDonationTypes(){
        return view('admin.charity_donation_types_page');
    }

}
