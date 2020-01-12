<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class HospitalsModel extends DefaultModel
{

    public function saveHospitaltypes($request)
    {
        $savedata = array('name'=>$request->hospital_type_name);
        $insert = $this->insert_data('esl_hospital_types',$savedata);
        return $insert;
    }

    public function hostpitalTypeList()
    {
        return $this->select_data('esl_hospital_types','*',array('status'=>1));
    }

    public function saveHospitalSpecialization($request)
    {
        $savedata = array('name'=>$request->Specialization_name);
        $insert = $this->insert_data('esl_hospitals_specials',$savedata);
        return $insert;
    }

    public function HospitalSpecializationList()
    {
        return $this->select_data('esl_hospitals_specials','*',array('status'=>1));
    }

    public function saveHospitalData($requestdata)
    {
        $insert = $this->insert_data('esl_hospitals',$requestdata);
        return $insert;
    }

    public function hospitalDataList()
    {
        $hospitals = DB::table('esl_hospitals')
            ->join('esl_hospital_types','esl_hospital_types.id','=','esl_hospitals.hospital_type')
            ->join('esl_countries','esl_countries.id','=','esl_hospitals.country_id')
            ->join('esl_states','esl_states.id','=','esl_hospitals.state_id')
            ->join('esl_districts','esl_districts.id','=','esl_hospitals.district_id')
            ->join('esl_cities','esl_cities.id','=','esl_hospitals.city_id')
            ->select('esl_hospitals.*','esl_hospital_types.name as hospital_type','esl_countries.name as country_name','esl_states.name as state_name','esl_districts.name as district_name','esl_cities.name as cite_name')
            ->orderBy('esl_hospitals.created','DESC')
            ->get();
        return $hospitals;
    }

    public function hospitalDetails($id)
    {
        $hospitals = DB::table('esl_hospitals')
            ->join('esl_hospital_types','esl_hospital_types.id','=','esl_hospitals.hospital_type')
            ->join('esl_countries','esl_countries.id','=','esl_hospitals.country_id')
            ->join('esl_states','esl_states.id','=','esl_hospitals.state_id')
            ->join('esl_districts','esl_districts.id','=','esl_hospitals.district_id')
            ->join('esl_cities','esl_cities.id','=','esl_hospitals.city_id')
            ->select('esl_hospitals.*','esl_hospital_types.name as hospital_type','esl_countries.name as country_name','esl_states.name as state_name','esl_districts.name as district_name','esl_cities.name as cite_name')
            ->where('esl_hospitals.id',$id)
            ->orderBy('esl_hospitals.created','DESC')
            ->get();
        return $hospitals;
    }
}
