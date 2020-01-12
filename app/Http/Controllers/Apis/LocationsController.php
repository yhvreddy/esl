<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LocationsModel;
use App\Http\Controllers\Apis\BaseController;
use Validator;
use App\CountryModel;
use App\StatesModel;
use App\DistrictsModel;
use App\CityModel;
class LocationsController extends BaseController
{
    public function __construct()
    {
        $this->countries = new CountryModel;
        $this->states    = new StatesModel;
        $this->districts = new DistrictsModel;
        $this->cities    = new CityModel;
        $this->location  = new LocationsModel;
    }

    public function CountriesLists(){
        $countries = $this->countries->countriesList();
        return $this->sendResponse($countries, 'Countries List.');
    }

    public function StatesLists()
    {
        $states = $this->states->StatesList();
        return $this->sendResponse($states,'States List');
    }

    public function DistrictsLists()
    {
        $districts = $this->districts->DistrictsList();
        return $this->sendResponse($districts,'Districts List');
    }

    public function CitiesLists()
    {
        $cities = $this->cities->CitiesList();
        return $this->sendResponse($cities,'Cities List');
    }

    public function LocationLists()
    {
        $locations = $this->location->LocationsList();
        return $this->sendResponse($locations,'Location\'s List');
    }


}
