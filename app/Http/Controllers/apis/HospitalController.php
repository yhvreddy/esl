<?php

namespace App\Http\Controllers\apis;

use App\Http\Controllers\Controller;
use App\LocationsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\apis\BaseController;
use App\HospitalsModel;
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

    public function hospitalsList()
    {
        //$user = Auth::user();
        $hospitals = $this->hospital->hospitalDataList();
        return $this->sendResponse($hospitals, 'Hospitals List.');
    }
}
