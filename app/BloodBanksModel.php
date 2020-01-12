<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class BloodBanksModel extends DefaultModel
{

    public function Bloodgroups()
    {
        return $this->select_data('esl_blood_groups','*',array('status'=>1));
    }

    public function SaveBoodGroups($request)
    {
        $insertdata = array('name' => $request->blood_group_name,'short_code' => $request->blood_group_short_name);
        $insert = $this->insert_data('esl_blood_groups',$insertdata);
        return $insert;
    }

    public function BloodBankSave($savedata)
    {
        $insertdata = $this->insert_data('esl_blood_banks',$savedata);
        return $insertdata;
    }

    public function BloodBanksList()
    {
        return $this->select_data('esl_blood_banks','*',array('status'=>1));
    }

    public function bloodbanksdetails($id)
    {
        return $this->select_data('esl_blood_banks','*',array('status'=>1,'id'=>$id));
    }
}
