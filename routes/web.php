<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {  return view('welcome'); });

Route::get('/sa/dashboard','DashboardController@index');

/*
 * Master Data
 */
Route::get('/sa/roles','RolesController@roleIndex');
Route::post('/sa/roles/save','RolesController@roleSaveData');

Route::get('/sa/countries','CountryController@CountriesIndex');
Route::post('/sa/countries/save','CountryController@CountriesaveData');

Route::get('/sa/states','StatesController@StateIndex');
Route::post('/sa/states/save','StatesController@StateSaveData');

Route::get('/sa/districts','DistrictsController@DistrictIndex');
Route::post('/sa/districts/save','DistrictsController@DistrictSave');

Route::get('/sa/cities','CityController@CityIndex');
Route::post('/sa/cities/save','CityController@CitieSave');

Route::get('/sa/locations','LocationsController@LocationIndex');
Route::post('/sa/locations/save','LocationsController@LocationSave');

Route::get('/sa/accidentypes','AccidentController@AccidentIndex');
Route::post('/sa/accidentypes/save','AccidentController@AccidentSave');

Route::get('/sa/hospitaltypes','HospitalsController@HospitalTypeIndex');
Route::post('/sa/hospitaltypes/save','HospitalsController@HospitalTypeSave');

Route::get('/sa/hospital/specializations','HospitalsController@HospitalSpecializationIndex');
Route::post('/sa/hospital/specializations/save','HospitalsController@HospitalSpecializationSave');

Route::get('/sa/bloodbanks/groups','BloodBanksController@BloodGroupIndex');
Route::post('/sa/bloodbanks/groups/save','BloodBanksController@BloodGroupSave');

Route::get('/sa/charity/types','CharityController@CharityTypesIndex');
Route::post('/sa/charity/types/save','CharityController@CharityTypesSave');

Route::get('/sa/charity/donationtypes','CharityController@CharityDonationTypes');
Route::post('/sa/charity/donationtypes/save','CharityController@CharityDonationSave');

Route::get('/sa/ambulance/types','AmbulanceController@AmbulanceTypeIndex');
Route::post('/sa/ambulance/types/save','AmbulanceController@AmbulanceTypeSave');
