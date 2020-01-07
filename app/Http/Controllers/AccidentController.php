<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccidentModel;
use App\Http\Controllers\DefaultController;
class AccidentController extends DefaultController
{

    public function __construct()
    {
        $this->accident = new AccidentModel;
    }

    public function AccidentIndex(){
        $accidentdata = $this->accident->accidentTypeList();
        return view('admin.accdient_types_page',compact('accidentdata'));
    }

    public function AccidentSave(Request $request)
    {
        $savedata = $this->accident->saveAccidentData($request);
        if($savedata != 0){
            return $this->success('/sa/accidentypes','Accident Type as successfully saved.');
        }else{
            return $this->failed('/sa/accidentypes','Accident Type as failed to save.');
        }

    }

}
