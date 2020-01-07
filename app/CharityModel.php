<?php

namespace App;

use Hamcrest\Thingy;
use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
class CharityModel extends DefaultModel
{

    public function charityTypesList()
    {
        return $this->select_data('esl_charity_types','*',array('status'=>1));
    }

    public function saveCharitypes($request)
    {
        $savedata = array('name'=>$request->charity_type_name);
        $insert = $this->insert_data('esl_charity_types',$savedata);
        return $insert;
    }

    public function saveDonationSave($request)
    {
        $savedata = array('name'=>$request->donation_type_name);
        $insert = $this->insert_data('esl_donation_types',$savedata);
        return $insert;
    }

    public function donationTypesList()
    {
        return $this->select_data('esl_donation_types','*',array('status'=>1));
    }

}
