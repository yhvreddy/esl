<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
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
}
