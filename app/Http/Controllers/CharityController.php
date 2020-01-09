<?php

namespace App\Http\Controllers;

use App\LocationsModel;
use Illuminate\Http\Request;
use App\CharityModel;
use App\Http\Controllers\DefaultController;
class CharityController extends DefaultController
{

    public function __construct()
    {
        $this->charity = new CharityModel;
        $this->location = new LocationsModel;
    }

    public function CharityTypesIndex(){
        $charitypes = $this->charity->charityTypesList();
        return view('admin.charity_types_page',compact('charitypes'));
    }

    public function CharityTypesSave(Request $request)
    {
        $savedata = $this->charity->saveCharitypes($request);
        if($savedata != 0){
            return $this->success('/sa/charity/types','Charity Type  as successfully saved.');
        }else{
            return $this->failed('/sa/charity/types','Charity Type as failed to save.');
        }
    }

    public function CharityDonationTypes(){
        $donationtypes = $this->charity->donationTypesList();
        return view('admin.charity_donation_types_page',compact('donationtypes'));
    }

    public function CharityDonationSave(Request $request)
    {
        $savedata = $this->charity->saveDonationSave($request);
        if($savedata != 0){
            return $this->success('/sa/charity/donationtypes','Donation Type  as successfully saved.');
        }else{
            return $this->failed('/sa/charity/donationtypes','Donation Type as failed to save.');
        }
    }

    public function AddCharity()
    {
        $countries  =   $this->location->countriesList();
        $states     =   $this->location->StatesList();
        $districts  =   $this->location->DistrictsList();
        $cities     =   $this->location->CitiesList();
        return view('admin.charity_add_page',compact('countries','states','districts','cities'));
    }

    public function CharityLists()
    {
        return view('admin.charity_list_page');
    }

}
