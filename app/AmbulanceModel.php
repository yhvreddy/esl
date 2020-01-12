<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
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

    public function saveAmbulanceData($requestdata)
    {
        $insert  = $this->insert_data('esl_ambulances',$requestdata);
        return $insert;
    }


    public function ambulanceList()
    {
        $ambulanceslist = DB::table('esl_ambulances')
            ->join('esl_ambulance_types','esl_ambulance_types.id','=','esl_ambulances.ambulance_type')
            ->join('esl_countries','esl_countries.id','=','esl_ambulances.country_id')
            ->join('esl_states','esl_states.id','=','esl_ambulances.state_id')
            ->join('esl_districts','esl_districts.id','=','esl_ambulances.district_id')
            ->join('esl_cities','esl_cities.id','=','esl_ambulances.city_id')
            ->select('esl_ambulances.*','esl_ambulance_types.name as ambulance_type','esl_countries.name as country_name','esl_states.name as state_name','esl_districts.name as district_name','esl_cities.name as cite_name')
            ->orderBy('esl_ambulances.created','DESC')
            ->get();
        return $ambulanceslist;
    }

    public function ambulanceDetails($id)
    {
        $ambulanceslist = DB::table('esl_ambulances')
            ->join('esl_ambulance_types','esl_ambulance_types.id','=','esl_ambulances.ambulance_type')
            ->join('esl_countries','esl_countries.id','=','esl_ambulances.country_id')
            ->join('esl_states','esl_states.id','=','esl_ambulances.state_id')
            ->join('esl_districts','esl_districts.id','=','esl_ambulances.district_id')
            ->join('esl_cities','esl_cities.id','=','esl_ambulances.city_id')
            ->select('esl_ambulances.*','esl_ambulance_types.name as ambulance_type','esl_countries.name as country_name','esl_states.name as state_name','esl_districts.name as district_name','esl_cities.name as cite_name')
            ->where('esl_ambulances.id',$id)
            ->orderBy('esl_ambulances.created','DESC')
            ->get();
        return $ambulanceslist;
    }

}
