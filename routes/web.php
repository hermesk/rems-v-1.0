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

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::Resource('clients','ClientsController');



//Transaction
Route::get('transaction','TransactionsController@index')->name('transaction.index');
Route::get('transaction/create','TransactionsController@create');
Route::post('transaction','TransactionsController@store');
Route::get('search','TransactionsController@searchtrx');

//payment types
Route::Resource('paymentType','PaymentTypesController');


//payments
Route::get('payments','PaymentsController@index')->name('payments.index');
Route::get('payments/create','PaymentsController@create')->name('payments.create');
Route::post('payments','PaymentsController@store')->name('payments.store');

//dropdown depenents
Route::get('get-client-name','TransactionsController@getClient');
Route::get('get-plotno','TransactionsController@getPlotnos');
Route::get('get-cost','TransactionsController@getCost');
// Route::get('get-client-id','TransactionsController@getClientId');
Route::get('get-client-plots','TransactionsController@getClientPlots');

//property details
Route::get('property','PropertiesController@index');

//location
Route::Resource('location','LocationsController');



//size
Route::Resource('size','SizesController');


//plotno
Route::get('plots','PropertiesController@plotsindex');//plots
Route::get('allocation','PropertiesController@takenPlots');//plots
Route::get('/plots/create','PropertiesController@createplotno');
Route::post('/plotno','PropertiesController@store');
Route::get('plots/{plotno}','PropertiesController@show');
Route::get('plots/{plotno}/edit','PropertiesController@edit');
Route::patch('plots/{plotno}','PropertiesController@update');


//dropdown dependents
// Route::get('get-sizes','HousetrxsController@getSizes');
// Route::get('get-plotno','HousetrxsController@getPlotnos');

//payment mode
Route::Resource('paymentMode','PaymentModesController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
