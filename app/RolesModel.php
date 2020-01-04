<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
use Session;
class RolesModel extends DefaultModel
{

    public function rolesList()
    {
       $roles = $this->select_data('esl_roles','*',array('status'=>1));
       return $roles;
    }

    public function roleSaveData($request)
    {
        $insert = array('name'=>$request->roleName,'short_code'=>$request->roleShortName);
        $savedata = $this->insert_data('esl_roles',$insert);
        return $savedata;
    }

}
