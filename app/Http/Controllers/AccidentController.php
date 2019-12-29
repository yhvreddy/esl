<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccidentController extends Controller
{

    public function AccidentIndex(){
        return view('admin.accdient_types_page');
    }

}
