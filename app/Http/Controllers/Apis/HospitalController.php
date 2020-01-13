<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HospitalsModel;
use App\LocationsModel;
use App\Http\Controllers\Apis\BaseController;
use Validator;
class HospitalController extends BaseController
{

    public function __construct()
    {
        $this->hospital = new HospitalsModel;
        $this->location = new LocationsModel;
    }

    public function index()
    {
        $hospitals = $this->hospital->hospitalDataList();
        return $this->sendResponse($hospitals, 'Hospitals List.');
    }

    public function hosptaldetails(Request $request)
    {
        $id = $request->hospital_id;
        $hospitals = $this->hospital->hospitalDetails($id);
        return $this->sendResponse($hospitals, 'Hospital Details.');
    }

    public function hospitalTypes()
    {
        $hospitaltypes = $this->hospital->hostpitalTypeList();
        return $this->sendResponse($hospitaltypes,'Hospital Types');
    }

    public function hospitalSpecializations()
    {
        $hospitalspls = $this->hospital->HospitalSpecializationList();
        return $this->sendResponse($hospitalspls,'Hospital Specializations');
    }

}
