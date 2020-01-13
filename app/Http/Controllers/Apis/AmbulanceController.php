<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LocationsModel;
use App\Http\Controllers\Apis\BaseController;
use Validator;
use App\AmbulanceModel;
class AmbulanceController extends BaseController
{

    public function __construct()
    {
        $this->ambulance = new AmbulanceModel;
        $this->location  = new LocationsModel;
    }

    public function ambulancesList()
    {
        $ambulances = $this->ambulance->ambulanceList();
        return $this->sendResponse($ambulances, 'Ambulance List.');
    }

    public function ambulancesdetails(Request $request)
    {
        $id = $request->ambulance_id;
        $ambulances = $this->ambulance->ambulanceDetails($id);
        return $this->sendResponse($ambulances, 'Hospital Details.');
    }

    public function ambulancesTypes()
    {
        $ambulancesTypes = $this->ambulance->ambulanceTypesList();
        return $this->sendResponse($ambulancesTypes, 'Ambulance Types.');
    }
}
