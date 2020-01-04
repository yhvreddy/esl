<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use App\CountryModel;
class CountryController extends DefaultController
{

    public function __construct()
    {
        $this->countries = new CountryModel;
    }

    public function CountriesIndex(){
        $countries = $this->countries->countriesList();
        return view('admin.countries_page',compact('countries'));
    }

    public function CountriesaveData(Request $request)
    {
        $savedata = $this->countries->CountriesaveData($request);
        if($savedata != 0){
            return $this->success('/sa/countries','Country as successfully saved.');
        }else{
            return $this->failed('/sa/countries','Country details aa failed to save.');
        }
    }

}
