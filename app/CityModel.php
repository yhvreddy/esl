<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class CityModel extends DefaultModel
{
    public function countriesList()
    {
        $list = $this->select_data('esl_countries','*',array('status'=>1));
        return $list;
    }

    public function StatesList(){
        $list = $this->select_data('esl_states','*',array('status'=>1));
        return $list;
    }

    public function DistrictsList(){
        $list = $this->select_data('esl_districts','*',array('status'=>1));
        return $list;
    }

    public function CitiesList()
    {
        return DB::table('esl_cities')
            ->join('esl_districts','esl_districts.id','=','esl_cities.district_id')
            ->join('esl_states','esl_states.id','=','esl_cities.state_id')
            ->join('esl_countries','esl_countries.id','=','esl_cities.country_id')
            ->select('esl_cities.*','esl_districts.name as district_name','esl_states.name as state_name','esl_countries.name as country_name')
            ->where('esl_cities.status',1)
            ->orderBy('esl_cities.created','DESC')
            ->get();
    }

    public function CitySaveData($request)
    {
        $insertdata = array('country_id'=>$request->country_id,'state_id'=>$request->state_id,'district_id'=>$request->district_id,'name'=>$request->city_name);
        $insert = $this->insert_data('esl_cities',$insertdata);
        return $insert;
    }
}
