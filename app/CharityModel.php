<?php

namespace App;

use Hamcrest\Thingy;
use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
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

    public function CharitySaveDetails($savedata)
    {
        $insert = $this->insert_data('esl_charity',$savedata);
        return $insert;
    }

    public function charityLists()
    {
        $charities = DB::table('esl_charity')
            ->join('esl_charity_types','esl_charity_types.id','=','esl_charity.charity_type')
            ->join('esl_countries','esl_countries.id','=','esl_charity.country_id')
            ->join('esl_states','esl_states.id','=','esl_charity.state_id')
            ->join('esl_districts','esl_districts.id','=','esl_charity.district_id')
            ->join('esl_cities','esl_cities.id','=','esl_charity.city_id')
            ->select('esl_charity.*','esl_charity_types.name as charity_type','esl_countries.name as country_name','esl_states.name as state_name','esl_districts.name as district_name','esl_cities.name as cite_name')
            ->orderBy('esl_charity.created','DESC')
            ->get();
        return $charities;
    }

    public function charitydetails($id)
    {
        $charities = DB::table('esl_charity')
            ->join('esl_charity_types','esl_charity_types.id','=','esl_charity.charity_type')
            ->join('esl_countries','esl_countries.id','=','esl_charity.country_id')
            ->join('esl_states','esl_states.id','=','esl_charity.state_id')
            ->join('esl_districts','esl_districts.id','=','esl_charity.district_id')
            ->join('esl_cities','esl_cities.id','=','esl_charity.city_id')
            ->select('esl_charity.*','esl_charity_types.name as charity_type','esl_countries.name as country_name','esl_states.name as state_name','esl_districts.name as district_name','esl_cities.name as cite_name')
            ->where('esl_charity.id',$id)
            ->orderBy('esl_charity.created','DESC')
            ->get();
        return $charities;
    }

}
