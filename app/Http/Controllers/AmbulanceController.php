<?php

namespace App\Http\Controllers;

use App\LocationsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\AmbulanceModel;
class AmbulanceController extends DefaultController
{

    public function __construct()
    {
        $this->ambulance = new AmbulanceModel;
        $this->location = new LocationsModel;
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

    public function AddAmbulances()
    {
        $countries  =   $this->location->countriesList();
        $states     =   $this->location->StatesList();
        $districts  =   $this->location->DistrictsList();
        $cities     =   $this->location->CitiesList();
        return view('admin.ambulance_add_page',compact('countries','states','districts','cities'));
    }

    public function AmbulancesList(){
        return view('admin.ambulance_list_page');
    }

    public function AddAmbulanceSave(Request $request)
    {

    }
}
