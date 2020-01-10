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
        $chariTypes =   $this->charity->charityTypesList();
        return view('admin.charity_add_page',compact('countries','states','districts','cities','chariTypes'));
    }

    public function CharityLists()
    {
        $charities = $this->charity->charityLists();
        return view('admin.charity_list_page',compact('charities'));
    }

    public function CharitySave(Request $request)
    {
        $uploads = $this->upload_file($request,'charity_image','uploads/charities');
        if($uploads['response'] != 0){
            $uploadimage = $uploads['upload'];
        }else{
            $uploadimage = '';
        }

        $geolocation = explode(',',$request->geo_location);

        $requestdata = array('name' => $request->charity_name, 'charity_type' => $request->Charity_type, 'mobile' => $request->mobile_number, 'phone' => $request->phone_number,'mail_id' => $request->hospital_email, 'country_id' => $request->country_id, 'state_id' => $request->state_id, 'district_id' => $request->district_id, 'city_id' => $request->city_id, 'location' => $request->location_name, 'pincode' => $request->pin_code, 'latitude' => $geolocation[0],'longitude' => $geolocation[1], 'ip_address' => $request->ip(), 'upload_image' => $uploadimage);

        $savedata = $this->charity->CharitySaveDetails($requestdata);

        if($savedata != 0){
            return $this->success('/sa/dashboard/charity/CharityLists','Charity Details are successfully saved.');
        }else{
            return $this->failed('/sa/dashboard/charity/AddCharity','Charity Details are failed to save.');
        }
    }
}
