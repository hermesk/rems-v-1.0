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

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/clients','ClientsController@index');
// Route::get('/clients/create','ClientsController@create');
// Route::post('/clients','ClientsController@store');
// Route::get('/clients/{client}','ClientsController@show');
// Route::get('/clients/{client}/edit','ClientsController@edit');
// Route::PATCH('/clients/{client}','ClientsController@update');
// Route::delete('/clients/{client}','ClientsController@destroy');
Route::Resource('clients','ClientsController');


  //housetrxs
Route::get('/housetrx','HousetrxsController@index');
Route::get('/housetrx/create','HousetrxsController@create');
Route::post('/housetrx','HousetrxsController@store');
//landtrx
Route::get('/landtrx','LandtrxsController@index');
Route::get('/landtrx/create','LandtrxsController@create');
Route::post('/landtrx','LandtrxsController@store');

//property details
Route::get('property','PropertiesController@index');
//location
Route::get('/location','PropertiesController@locationindex');
Route::get('/location/create','PropertiesController@createlocation');
Route::get('/location/{location}','PropertiesController@showlocation');
Route::post('/location','PropertiesController@storelocation');
Route::get('/location/{location}/edit','PropertiesController@editlocation');
Route::patch('/location/{location}','PropertiesController@updatelocation');
Route::delete('/location/{location}','PropertiesController@destroylocation');


//size
Route::get('/size','PropertiesController@Sizeindex');
Route::get('/size/create','PropertiesController@createsize');
Route::post('/size','PropertiesController@storesize');
Route::get('/size/{size}','PropertiesController@showSize');
Route::get('/size/{size}/edit','PropertiesController@editSize');
Route::patch('/size/{size}','PropertiesController@updateSize');
Route::delete('/size/{size}','PropertiesController@destroySize');

//plotno
Route::get('/plotno/create','PropertiesController@createplotno');
Route::post('/plotno','PropertiesController@storeplotno');

//dropdown dependents
Route::get('get-sizes','HousetrxsController@getSizes');
Route::get('get-plotno','HousetrxsController@getPlotnos');

//payment mode
Route::get('/payment-mode','PropertiesController@paymentModeindex');
Route::get('/payment-mode/create','PropertiesController@createPaymentMode');
Route::post('/payment-mode','PropertiesController@storePaymentMode');
Route::get('/payment-mode/{paymentmode}','PropertiesController@showPaymentMode');
Route::get('/payment-mode/{paymentmode}/edit','PropertiesController@editPaymentMode');
Route::patch('/payment-mode/{paymentmode}','PropertiesController@updatePaymentMode');
Route::delete('/payment-mode/{paymentmode}','PropertiesController@destroyPaymentMode');