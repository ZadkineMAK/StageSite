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
Route::post('stage/search', 'Web\StageController@search')->name('stage.search');

Route::group(['middleware' => 'web'], function() {
    Route::get('/', 'Web\IndexController@index');
    Route::get('stage', 'Web\StageController@index');
    route::get('stage' , 'web\stageController@tovogen');
    Route::get('stage/create', 'Web\StageController@create');

});



Route::auth();

Route::get('/home', 'HomeController@index');

