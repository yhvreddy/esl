<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{


    /*
     * Roles Form
     */
    protected function roleIndex(){
        return view('admin.roles_page');
    }

}
