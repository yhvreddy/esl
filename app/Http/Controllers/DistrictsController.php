<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\DistrictsModel;

class DistrictsController extends DefaultController
{

    public function __construct()
    {
        $this->District = new DistrictsModel;
    }

    public function DistrictIndex()
    {
        $countries  =   $this->District->countriesList();
        $states     =   $this->District->StatesList();
        $districts  =   $this->District->DistrictsList();
        return view('admin.districts_page',compact('countries','districts','states'));
    }

    public function DistrictSave(Request $request)
    {
        $insert = $this->District->DistrictSaveData($request);
        if($insert != 0){
            return $this->success('/sa/districts','District as successfully saved.');
        }else{
            return $this->failed('/sa/districts','District failed to save.');
        }
    }



}
