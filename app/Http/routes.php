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

Route::group(['middleware' => 'web'], function() {
    Route::get('/', 'Web\IndexController@index');
    Route::resource('school', 'Web\SchoolController', ['only' => ['index', 'show']]);
    Route::resource('admin/school', 'Web\AdminSchoolController', ['only' => ['index', 'show']]);
    Route::resource('admin/gebruiker', 'Web\AdminGebruikerController', ['only' => ['index', 'show']]);
    Route::resource('admin/stage', 'Web\AdminStageController', ['only' => ['index', 'show']]);
    Route::resource('admin', 'Web\AdminController', ['only' => ['index', 'show']]);
});


Route::auth();

Route::get('/home', 'HomeController@index');

//Route::get('school.index','SchoolController@index');

