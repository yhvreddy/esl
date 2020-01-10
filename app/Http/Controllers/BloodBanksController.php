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
        $bloodBanks = $this->bloodbank->BloodBanksList();
        return view('admin.bloodbanks_list_page',compact('bloodBanks'));
    }

    public function BloodBankSave(Request $request)
    {
        $uploads = $this->upload_file($request,'bloodBank_image','uploads/bloodBanks');
        if($uploads['response'] != 0){
            $uploadimage = $uploads['upload'];
        }else{
            $uploadimage = '';
        }

        $geolocation = explode(',',$request->geo_location);

        $requestdata = array('name' => $request->bloodBank_name, 'mobile' => $request->mobile_number, 'phone' => $request->phone_number,'mail_id' => $request->mail_id, 'country_id' => $request->country_id, 'state_id' => $request->state_id, 'district_id' => $request->district_id, 'city_id' => $request->city_id, 'location' => $request->location_name, 'pincode' => $request->pin_code, 'latitude' => $geolocation[0],'longitude' => $geolocation[1], 'ip_address' => $request->ip(), 'upload_image' => $uploadimage);

        $savedata = $this->bloodbank->BloodBankSave($requestdata);
        if($savedata != 0){
            return $this->success('/sa/dashboard/bloodbank/BloodBankList','Blood Bank Details are successfully saved.');
        }else{
            return $this->failed('/sa/dashboard/bloodbank/AddBloodBank','Blood Bank Details are failed to save.');
        }
    }
}
