<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodBanksController extends Controller
{

    public function BloodGroupIndex(){
        return view('admin.bloodgroup_page');
    }

}
