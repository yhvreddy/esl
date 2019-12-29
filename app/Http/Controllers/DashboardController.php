<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Auth;

class DashboardController extends DefaultController
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->isLoggedin();
    }

    public function index(){
        return view('admin.dashboard');
    }

}
