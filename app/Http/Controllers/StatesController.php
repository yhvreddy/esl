<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatesController extends Controller
{

    public function StateIndex(){
        return view('admin.states_page');
    }

}
