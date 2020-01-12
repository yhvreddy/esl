<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LocationsModel;
use App\Http\Controllers\Apis\BaseController;
use Validator;
use App\AccidentModel;
class AccidentController extends BaseController
{
    public function __construct()
    {
        $this->accedents = new AccidentModel;
    }

    public function AccedentType()
    {
        $accedents = $this->accedents->accidentTypeList();
        return $this->sendResponse($accedents, 'Accidents Types List.');
    }
}
