<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class StatesModel extends DefaultModel
{
    public function countriesList()
    {
        $list = $this->select_data('esl_countries','*',array('status'=>1));
        return $list;
    }

    public function StatesList()
    {
        return DB::table('esl_states')
               ->join('esl_countries','esl_countries.id','=','esl_states.country_id')
               ->select('esl_states.*','esl_countries.name as country_name')
                ->where('esl_states.status',1)
               ->orderBy('esl_states.created','DESC')
               ->get();
    }

    public function StateSaveData($request)
    {
        $insertdata = array('country_id'=>$request->country_id,'name'=>$request->state_name);
        $insert = $this->insert_data('esl_states',$insertdata);
        return $insert;
    }
}
