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
        $this->hospital = new HospitalsModel();
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
        $countries  =   $this->location->countriesList();
        $states     =   $this->location->StatesList();
        $districts  =   $this->location->DistrictsList();
        $cities     =   $this->location->CitiesList();
        return view('admin.hospitals_add',compact('countries','states','districts','cities'));
    }

    public function AddHospitalSave(Request $request)
    {

    }

    public function HospitalsList()
    {

    }
}
