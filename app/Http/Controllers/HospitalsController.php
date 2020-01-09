<?php

namespace App\Http\Controllers;

use App\LocationsModel;
use Illuminate\Http\Request;
use App\HospitalsModel;
use App\Http\Controllers\DefaultController;

class HospitalsController extends DefaultController
{

    public function __construct()
    {
        $this->hospital = new HospitalsModel;
        $this->location = new LocationsModel;
    }

    public function HospitalTypeIndex(){
        $hospitalTypes = $this->hospital->hostpitalTypeList();
        return view('admin.hospitals_types_page',compact('hospitalTypes'));
    }

    public function HospitalTypeSave(Request $request)
    {
        $savedata = $this->hospital->saveHospitaltypes($request);
        if($savedata != 0){
            return $this->success('/sa/hospitaltypes','Hospital Type as successfully saved.');
        }else{
            return $this->failed('/sa/hospitaltypes','Hospital Type as failed to save.');
        }
    }

    public function HospitalSpecializationIndex(){
        $hospitalSpecializations = $this->hospital->HospitalSpecializationList();
        return view('admin.hospitals_specialization_page',compact('hospitalSpecializations'));
    }

    public function HospitalSpecializationSave(Request $request)
    {
        $savedata = $this->hospital->saveHospitalSpecialization ($request);
        if($savedata != 0){
            return $this->success('/sa/hospital/specializations','Hospital Specialization  as successfully saved.');
        }else{
            return $this->failed('sa/hospital/specializations','Hospital Specialization  as failed to save.');
        }
    }

    public function AddHospitals()
    {
        $countries      =   $this->location->countriesList();
        $states         =   $this->location->StatesList();
        $districts      =   $this->location->DistrictsList();
        $cities         =   $this->location->CitiesList();
        $hospitaltype   =   $this->hospital->hostpitalTypeList();
        return view('admin.hospitals_add',compact('countries','states','districts','cities','hospitaltype'));
    }

    public function AddHospitalSave(Request $request)
    {
        $uploads = $this->upload_file($request,'hospital_logo','uploads/hospitals');
        if($uploads['response'] != 0){
            $uploadimage = $uploads['upload'];
        }else{
            $uploadimage = '';
        }
        $genHospitalLetters = $this->initial_litters($request->hospital_name);
        $reg_id = $genHospitalLetters.'0'.$this->random_string(4).date('d');

        $geolocation = explode(',',$request->geo_location);

        $requestdata = array('reg_id' => $reg_id,'name' => $request->hospital_name, 'hospital_type' => $request->hospital_type, 'mobile' => $request->mobile_number, 'phone' => $request->phone_number,'mail_id' => $request->hospital_email, 'reg_name' => $request->hospital_reg_name, 'country_id' => $request->country_id, 'state_id' => $request->state_id, 'district_id' => $request->district_id, 'city_id' => $request->city_id, 'website' => $request->hospital_website , 'location' => $request->location_name, 'pincode' => $request->pin_code, 'latitude' => $geolocation[0],'longitude' => $geolocation[1], 'ip_address' => $request->ip(), 'upload_logo' => $uploadimage);

        $savedata = $this->hospital->saveHospitalData($requestdata);
        if($savedata != 0){
            return $this->success('/sa/dashboard/hospitals/HospitalsList','Hospital Details are successfully saved.');
        }else{
            return $this->failed('sa/dashboard/hospitals/AddHospital','Hospital Details are failed to save.');
        }
    }

    public function HospitalsList()
    {
        $hospitals = $this->hospital->hospitalDataList();
        return view('admin.hospitals_list',compact('hospitals'));
    }
}
