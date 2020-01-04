<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
class CountryModel extends DefaultModel
{

    public function countriesList(){
        $countries = $this->select_data('esl_countries','*',array('status'=>1));
        return $countries;
    }

    public function CountriesaveData($request)
    {
        $insert = array('sortname'=>$request->countryShortName,'name'=>$request->countryName,'phonecode'=>$request->countryCode);
        $savedata = $this->insert_data('esl_countries',$insert);
        return $savedata;
    }

}
