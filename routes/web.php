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

Route::get('/sa/countries','CountryController@CountriesIndex');

Route::get('/sa/states','StatesController@StateIndex');

Route::get('/sa/districts','DistrictsController@DistrictIndex');

Route::get('/sa/cities','CityController@CityIndex');

Route::get('/sa/locations','LocationsController@LocationIndex');

Route::get('/sa/accidentypes','AccidentController@AccidentIndex');

Route::get('/sa/hospitaltypes','HospitalsController@HospitalTypeIndex');

Route::get('/sa/hospital/specializations','HospitalsController@HospitalSpecializationIndex');

Route::get('/sa/bloodbanks/groups','BloodBanksController@BloodGroupIndex');

Route::get('/sa/charity/types','CharityController@CharityTypesIndex');

Route::get('/sa/charity/donationtypes','CharityController@CharityDonationTypes');

Route::get('/sa/ambulance/types','AmbulanceController@AmbulanceTypeIndex');
