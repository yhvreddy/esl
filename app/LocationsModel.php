<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  App\DefaultModel;
use DB;
class LocationsModel extends DefaultModel
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

    public function CitiesList(){
        $list = $this->select_data('esl_cities','*',array('status'=>1));
        return $list;
    }

    public function LocationsList()
    {
        return DB::table('esl_locations')
            ->join('esl_cities','esl_cities.id','=','esl_locations.district_id')
            ->join('esl_districts','esl_districts.id','=','esl_locations.district_id')
            ->join('esl_states','esl_states.id','=','esl_locations.state_id')
            ->join('esl_countries','esl_countries.id','=','esl_locations.country_id')
            ->select('esl_locations.*','esl_cities.name as city_name','esl_districts.name as district_name','esl_states.name as state_name','esl_countries.name as country_name')
            ->where('esl_locations.status',1)
            ->orderBy('esl_locations.created','DESC')
            ->get();
    }

    public function LocationSaveData($request)
    {
        $insertdata = array('country_id'=>$request->country_id,'state_id'=>$request->state_id,'district_id'=>$request->district_id,'city_id'=>$request->city_id,'name'=>$request->location_name,'pincode'=>$request->pin_code);
        $insert = $this->insert_data('esl_locations',$insertdata);
        return $insert;
    }
}
