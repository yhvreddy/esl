<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LocationsModel;
use App\Http\Controllers\Apis\BaseController;
use Validator;
use App\CharityModel;
class CharityController extends BaseController
{
    public function __construct()
    {
        $this->charity = new CharityModel;
        $this->location  = new LocationsModel;
    }

    public function charityList()
    {
        $charity = $this->charity->charityLists();
        return $this->sendResponse($charity, 'charity List.');
    }

    public function charitydetails(Request $request)
    {
        $id = $request->charity_id;
        $charity = $this->charity->charitydetails($id);
        return $this->sendResponse($charity, 'charity Details.');
    }

    public function charityTypes()
    {
        $charityTypes = $this->charity->charityTypesList();
        return $this->sendResponse($charityTypes, 'charity Types.');
    }
    
    public function donationTypes()
    {
        $donationTypesList = $this->charity->donationTypesList();
        return $this->sendResponse($donationTypesList, 'Donations Types.');
    }
}
