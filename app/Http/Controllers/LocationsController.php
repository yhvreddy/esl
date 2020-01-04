<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\LocationsModel;
class LocationsController extends DefaultController
{

    public function __construct()
    {
        $this->location = new LocationsModel;
    }

    public function LocationIndex(){
        $countries  =   $this->location->countriesList();
        $states     =   $this->location->StatesList();
        $districts  =   $this->location->DistrictsList();
        $cities     =   $this->location->CitiesList();
        $locations  =   $this->location->LocationsList();
        return view('admin.locations_page',compact('countries','states','districts','cities','locations'));
    }

    public function LocationSave(Request $request)
    {
        $insert = $this->location->LocationSaveData($request);
        if($insert != 0){
            return $this->success('/sa/locations','Location as successfully saved.');
        }else{
            return $this->failed('/sa/locations','Location failed to save.');
        }
    }
}
