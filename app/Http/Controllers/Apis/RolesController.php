<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Apis\BaseController;
use Validator;
use App\RolesModel;
class RolesController extends BaseController
{
    public function __construct()
    {
        $this->roles = new RolesModel;
    }

    public function rolesList()
    {
        $roles = $this->roles->rolesList();
        return $this->sendResponse($roles, 'Roles List.');
    }
}
