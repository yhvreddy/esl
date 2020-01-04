<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DefaultModel;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
class DefaultController extends Controller
{

    public function users(){
        return User::all();
    }

    public function isLoggedin(){
        if(session()->exists('islogin') && session()->get('islogin') == 1){
        }else{
            redirect('/login');
        }
    }

    public function upload_file($request,$name,$path){
        if($request->hasfile($name)){
            $file = $request->file($name);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move($path,$filename);
            return array('response' => 1, 'message' => 'Uploaded Success', 'upload' => $path.'/'.$filename);
        }else{
            return array('response' => 0, 'message' => 'No File To Upload', 'upload' => '');
        }
    }

    public function uploadfile($request,$name,$path){
        if($request->hasfile($name)){
            $file = $request->file($name);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move($path,$filename);
            return $path.'/'.$filename;
        }else{
            return 0;
        }
    }

    function genPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function success($redirectlink,$message){
        return Redirect::to($redirectlink)->withSuccess($message);
    }

    public function failed($redirectlink,$message){
        return Redirect::to($redirectlink)->withSuccess($message);
    }

    public function print_r($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}
