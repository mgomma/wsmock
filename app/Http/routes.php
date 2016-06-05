<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return redirect('gosi');
});


Route::resource('gosi', 'GosiController');
Route::resource('engagmentSummaryBeanList', 'EngagmentSummaryBeanListController');
Route::get('gosi/edit/{id}', 'GosiController@edit');


Route::resource('contributor','ContributorController');
Route::post('contributor','ContributorController@index');
Route::post('app/services/contributorservice','ContributorController@testme');

Route::get('testSoapClient','ContributorController@testSoapClient');

Route::any('gosi_soap', 'SOAPController@serve');

