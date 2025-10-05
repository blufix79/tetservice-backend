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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->group(function ($router) {
//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');
// });

Route::group(['middleware' => 'api'], function ($router) {

    Route::group(['prefix' => 'auth'], function() {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::get('me', 'AuthController@me');
    });

    Route::resource('cities','CityController');
    Route::resource('contracts','ContractController');
    Route::resource('customers','CustomerController');
    Route::resource('customers.contracts','ContractController');
    Route::resource('interventions','InterventionController');
    Route::resource('products','ProductController');
    Route::resource('repairtypes','RepairTypeController');
    Route::resource('repairers','RepairerController');
    Route::resource('repairers.interventions','InterventionController');
    Route::resource('states','StateController');
    Route::resource('configurations','ConfigurationController');
    Route::resource('timeslots','TimeSlotsController');

});












