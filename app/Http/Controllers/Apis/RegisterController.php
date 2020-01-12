<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Apis\BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class RegisterController extends BaseController
{

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'mail_id'       => 'required|email|User',
            'mobile'        => 'required|numeric|min:10',
            'password'      => 'required',
            'c_password'    => 'required|same:password',
            'blood_group'   => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user;

        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['mail_id' => $request->mail_id, 'password' => $request->password])){

            //insert ip_address
            $data = array('ip_address' => $request->ip());
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['name']  =  $user;

            return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

}
