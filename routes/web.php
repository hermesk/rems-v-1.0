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
Route::get('excel-export', 'TransactionsController@exportToExcel');


//payment types
Route::Resource('paymentType','PaymentTypesController');


//payments
Route::get('payments','PaymentsController@index')->name('payments.index');
Route::get('payments/create','PaymentsController@create')->name('payments.create');
Route::post('payments','PaymentsController@store')->name('payments.store');
Route::get('excel-export-payments', 'PaymentsController@exportToExcel');

//dropdown depenents
Route::get('get-client-name','TransactionsController@getClient');
Route::get('get-plotno','TransactionsController@getPlotnos');
Route::get('get-cost','TransactionsController@getCost');
Route::get('get-client-plots','TransactionsController@getClientPlots');

//property details
Route::get('property','PlotnosController@index');

//location
Route::Resource('location','LocationsController');



//size
Route::Resource('size','SizesController');


//plotno
Route::get('plots','PlotnosController@plotsindex');//plots
Route::get('taken-plots','PlotnosController@takenPlots');//taken plots
Route::get('available-plots','PlotnosController@availablePlots');//available plots
Route::get('/plots/create','PlotnosController@createplotno');
Route::post('/plotno','PlotnosController@store');
Route::get('plots/{plotno}','PlotnosController@show');
Route::get('plots/{plotno}/edit','PlotnosController@edit');
Route::patch('plots/{plotno}','PlotnosController@update');
Route::get('plots-report','PlotnosController@plotsReport');//plots

//payment mode
Route::Resource('paymentMode','PaymentModesController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes();['register' => false]

