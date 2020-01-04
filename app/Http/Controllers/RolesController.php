<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\RolesModel;
use Session;
class RolesController extends DefaultController
{


    public function __construct()
    {
        $this->roles = new RolesModel;
    }


    /*
     * Roles Form
     */
    public function roleIndex()
    {
        $roles  =   $this->roles->rolesList();
        return view('admin.roles_page',compact('roles'));
    }

    public function roleSaveData(Request $request)
    {
        $rolesave = $this->roles->roleSaveData($request);
        if($rolesave != 0){
            return $this->success('/sa/roles','Role as successfully saved.');
        }else{
            return $this->failed('/sa/roles','Role failed to save.');
        }

    }

}
