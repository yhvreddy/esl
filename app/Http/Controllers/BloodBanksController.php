<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodBanksModel;
use App\Http\Controllers\DefaultController;
class BloodBanksController extends DefaultController
{

    public function __construct()
    {
        $this->bloodbank = new BloodBanksModel;
    }

    public function BloodGroupIndex(){
        $bloodgroups = $this->bloodbank->Bloodgroups();
        return view('admin.bloodgroup_page',compact('bloodgroups'));
    }

    public function BloodGroupSave(Request $request)
    {
        $savedata = $this->bloodbank->SaveBoodGroups($request);
        if($savedata != 0){
            return $this->success('/sa/bloodbanks/groups','Blood Group  as successfully saved.');
        }else{
            return $this->failed('/sa/bloodbanks/groups','Blood Group as failed to save.');
        }
    }
}
