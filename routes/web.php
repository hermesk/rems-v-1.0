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


Route::Resource('clients','ClientsController');



//Transaction
Route::get('transaction/create','TransactionsController@create');
Route::post('transaction','TransactionsController@store');

//dropdown depenents
Route::get('get-sizes','TransactionsController@getSizes');
Route::get('get-plotno','TransactionsController@getPlotnos');
Route::get('get-cost','TransactionsController@getCost');


//property details
Route::get('property','PropertiesController@index');
//location
Route::Resource('location','LocationsController');



//size
Route::Resource('size','SizesController');


//plotno
Route::get('/plotno/create','PropertiesController@createplotno');
Route::post('/plotno','PropertiesController@storeplotno');

//dropdown dependents
// Route::get('get-sizes','HousetrxsController@getSizes');
// Route::get('get-plotno','HousetrxsController@getPlotnos');

//payment mode
Route::Resource('payment-mode','PaymentModesController');
