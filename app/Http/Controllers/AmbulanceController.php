<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\AmbulanceModel;
class AmbulanceController extends DefaultController
{

    public function __construct()
    {
        $this->ambulance = new AmbulanceModel;
    }

    public function AmbulanceTypeIndex(){
        $ambulanceTypeList = $this->ambulance->ambulanceTypesList();
        return view('admin.ambulance_types_page',compact('ambulanceTypeList'));
    }

    public function AmbulanceTypeSave(Request $request)
    {
        $savedata = $this->ambulance->AmbulanceTypeSave($request);
        if($savedata != 0){
            return $this->success('sa/ambulance/types','Ambulance Type as successfully saved.');
        }else{
            return $this->failed('sa/ambulance/types','Ambulance Type as failed to save.');
        }
    }

}
