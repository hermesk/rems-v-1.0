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
Route::get('export_to_excel', 'TransactionsController@export');//excel
Route::get('export_to_csv', 'TransactionsController@csvExport');//csv
Route::get('export-view', 'TransactionsController@exportView');//csv
Route::get('pdf', 'TransactionsController@downloadPDF');//pdf


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
Route::get('get-client-plots','TransactionsController@getClientPlots');

//property details
Route::get('property','PlotnosController@index');

//location
Route::Resource('location','LocationsController');



//size
Route::Resource('size','SizesController');


//plotno
Route::get('plots','PlotnosController@plotsindex');//plots
Route::get('taken-plots','PlotnosController@takenPlots');//plots
Route::get('available-plots','PlotnosController@availablePlots');//plots
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

