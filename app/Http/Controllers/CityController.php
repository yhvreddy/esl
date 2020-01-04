<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\CityModel;
class CityController extends DefaultController
{

    public function __construct()
    {
        $this->city = new CityModel;
    }

    public function CityIndex(){
        $countries  =   $this->city->countriesList();
        $states     =   $this->city->StatesList();
        $districts  =   $this->city->DistrictsList();
        $cities     =   $this->city->CitiesList();
        return view('admin.cities_page',compact('countries','states','districts','cities'));
    }

    public function CitieSave(Request $request)
    {
        $insert = $this->city->CitySaveData($request);
        if($insert != 0){
            return $this->success('/sa/cities','City as successfully saved.');
        }else{
            return $this->failed('/sa/cities','City failed to save.');
        }
    }
}
