<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', 'Apis\RegisterController@register');
Route::post('login', 'Apis\RegisterController@login');

Route::middleware('auth:api')->group( function () {

    //Hospital
    Route::get('hospitals/list', 'Apis\HospitalController@index');
    Route::get('hospitals/{hospital_id}/details', 'Apis\HospitalController@hosptaldetails');
    //Ambulance
    Route::get('ambulances/list','Apis\AmbulanceController@ambulancesList');
    Route::get('ambulances/{ambulance_id}/details','Apis\AmbulanceController@ambulancesdetails');
    //BloodBanks
    Route::get('bloodbanks/list','Apis\BloodBankController@bloodbanksList');
    Route::get('bloodbanks/{bloodbank_id}/details','Apis\BloodBankController@bloodbanksdetails');
    //Charity
    Route::get('charity/list','Apis\CharityController@charityList');
    Route::get('charity/{charity_id}/details','Apis\CharityController@charitydetails');


    /*
     * Master Data
     */
    // Countries
    Route::get('countries/list','Apis\LocationsController@CountriesLists');
    //states
    Route::get('states/list','Apis\LocationsController@StatesLists');
    //Districts
    Route::get('districts/list','Apis\LocationsController@DistrictsLists');
    //Cities
    Route::get('cities/list','Apis\LocationsController@CitiesLists');
    //Locations
    Route::get('locations/list','Apis\LocationsController@LocationLists');
    //Roles
    Route::get('roles/list','Apis\RolesController@rolesList');
    //Blood groups
    Route::get('bloodgroups/list','Apis\BloodBankController@bloodgroupsList');
    //Accident
    Route::get('accidents/types','Apis\AccidentController@AccedentType');
    //Donation

    //Hospitals

    //Ambulances

});
