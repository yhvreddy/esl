<?php

namespace App\Http\Controllers;

use App\LocationsModel;
use Illuminate\Http\Request;
use App\BloodBanksModel;
use App\Http\Controllers\DefaultController;
class BloodBanksController extends DefaultController
{

    public function __construct()
    {
        $this->bloodbank = new BloodBanksModel;
        $this->location = new LocationsModel;
    }

    public function BloodGroupIndex(){
        $bloodgroups = $this->bloodbank->Bloodgroups();
        return view('admin.bloodgroup_page',compact('bloodgroups'));
    }

    public function BloodGroupSave(Request $request)
    {
        $savedata = $this->bloodbank->SaveBoodGroups($request);
        if($savedata != 0){
            return $this->success('/sa/bloodbanks/groups','Blood Group  as successfully saved.');
        }else{
            return $this->failed('/sa/bloodbanks/groups','Blood Group as failed to save.');
        }
    }

    public function AddBloodBank()
    {
        $countries  =   $this->location->countriesList();
        $states     =   $this->location->StatesList();
        $districts  =   $this->location->DistrictsList();
        $cities     =   $this->location->CitiesList();
        return view('admin.bloodbanks_add_page',compact('countries','states','districts','cities'));
    }

    public function BloodBanksList()
    {
        return view('admin.bloodbanks_list_page');
    }
}
