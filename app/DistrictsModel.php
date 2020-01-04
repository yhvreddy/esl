<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class DistrictsModel extends DefaultModel
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

    public function DistrictsList()
    {
        return DB::table('esl_districts')
            ->join('esl_states','esl_states.id','=','esl_districts.state_id')
            ->join('esl_countries','esl_countries.id','=','esl_districts.country_id')
            ->select('esl_districts.*','esl_states.name as state_name','esl_countries.name as country_name')
            ->where('esl_districts.status',1)
            ->orderBy('esl_districts.created','DESC')
            ->get();
    }

    public function DistrictSaveData($request)
    {
        $insertdata = array('country_id'=>$request->country_id,'state_id'=>$request->state_id,'name'=>$request->district_name);
        $insert = $this->insert_data('esl_districts',$insertdata);
        return $insert;
    }
}
