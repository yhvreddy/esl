<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\StatesModel;
class StatesController extends DefaultController
{

    public function __construct()
    {
        $this->States = new StatesModel;
    }

    public function StateIndex()
    {
        $countries  =   $this->States->countriesList();
        $states     =   $this->States->StatesList();
        return view('admin.states_page',compact('countries','states'));
    }

    public function StateSaveData(Request $request)
    {
        $insert = $this->States->StateSaveData($request);
        if($insert != 0){
            return $this->success('/sa/states','State as successfully saved.');
        }else{
            return $this->failed('/sa/states','State failed to save.');
        }
    }

}
