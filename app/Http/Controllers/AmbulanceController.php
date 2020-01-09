<?php

namespace App\Http\Controllers;

use App\LocationsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\AmbulanceModel;
use function PHPUnit\Framework\StaticAnalysis\HappyPath\AssertIsArray\consume;

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
        $ambulancetypes = $this->ambulance->ambulanceTypesList();
        return view('admin.ambulance_add_page',compact('countries','states','districts','cities','ambulancetypes'));
    }

    public function AmbulancesList(){
        $ambulancelist = $this->ambulance->ambulanceList();
        return view('admin.ambulance_list_page',compact('ambulancelist'));
    }

    public function AddAmbulanceSave(Request $request)
    {
        $uploads = $this->upload_file($request,'ambulance_image','uploads/ambulance');
        if($uploads['response'] != 0){
            $uploadimage = $uploads['upload'];
        }else{
            $uploadimage = '';
        }

        $geolocation = explode(',',$request->geo_location);

        $requestdata = array('name' => $request->ambulance_name, 'vehicle_id' => $request->ambulance_reg_vehicle_id, 'ambulance_type' => $request->ambulance_type_id, 'mobile' => $request->ambulance_mobile_number, 'phone' => $request->ambulance_phone_number,'mail_id' => $request->ambulance_email, 'country_id' => $request->country_id, 'state_id' => $request->state_id, 'district_id' => $request->district_id, 'city_id' => $request->city_id, 'location' => $request->location_name, 'pincode' => $request->pin_code, 'latitude' => $geolocation[0],'longitude' => $geolocation[1], 'ip_address' => $request->ip(), 'upload_image' => $uploadimage);

        $savedata = $this->ambulance->saveAmbulanceData($requestdata);
        if($savedata != 0){
            return $this->success('/sa/dashboard/ambulance/AmbulanceList','Ambulance Details are successfully saved.');
        }else{
            return $this->failed('/sa/dashboard/ambulance/AddAmbulance','Ambulance Details are failed to save.');
        }
    }
}
