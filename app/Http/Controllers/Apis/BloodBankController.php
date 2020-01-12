<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LocationsModel;
use App\Http\Controllers\Apis\BaseController;
use Validator;
use App\BloodBanksModel;
class BloodBankController extends BaseController
{
    public function __construct()
    {
        $this->bloodbank = new BloodBanksModel;
        $this->location  = new LocationsModel;
    }

    public function bloodbanksList()
    {
        $bloodbanks = $this->bloodbank->BloodBanksList();
        return $this->sendResponse($bloodbanks, 'Blood banks List.');
    }

    public function bloodbanksdetails(Request $request)
    {
        $id = $request->bloodbank_id;
        $bloodbanks = $this->bloodbank->bloodbanksdetails($id);
        return $this->sendResponse($bloodbanks, 'Blood bank Details.');
    }

    public function bloodgroupsList()
    {
        $bloodgroups = $this->bloodbank->Bloodgroups();
        return $this->sendResponse($bloodgroups, 'Blood Groups List.');
    }
}
