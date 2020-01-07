<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
class AmbulanceModel extends DefaultModel
{

    public function AmbulanceTypeSave($request)
    {
        $savedata = array('name'=>$request->ambulance_type_name);
        $insert = $this->insert_data('esl_ambulance_types',$savedata);
        return $insert;
    }

    public function ambulanceTypesList()
    {
        return $this->select_data('esl_ambulance_types','*',array('status'=>1));
    }

}
