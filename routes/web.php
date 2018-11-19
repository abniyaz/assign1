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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@home');
// Route::get('/home', function () {

//     return view('home');
// });
//form for submiting service request
Route::get('/requestserviceview', 'HomeController@serviceRequestView');
Route::post('submitservice', 'HomeController@serviceRequestSubmit');
//
//View the service requests made
Route::get('/viewRequests', 'HomeController@viewRequests');

//review 
Route::get('/review/{id}', 'HomeController@showReview');
Route::post('submitreview', 'HomeController@submitReview');
//for modals
Route::get('/modal/{id}', 'HomeController@getUserRequesData');
Route::get('/reviewmodal/{id}', 'HomeController@getDataReview');

//accept request 
Route::get('/acceptrequest', 'HomeController@acceptRequestView');
Route::post('submitrequest', 'HomeController@submitRequest');


