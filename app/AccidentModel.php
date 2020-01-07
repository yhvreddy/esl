<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
class AccidentModel extends DefaultModel
{
    public function saveAccidentData($request)
    {
        $savedata = array('name'=>$request->accident_type_name);
        $insert = $this->insert_data('esl_accident_types',$savedata);
        return $insert;
    }

    public function accidentTypeList()
    {
        return $this->select_data('esl_accident_types','*',array('status'=>1));
    }
}
