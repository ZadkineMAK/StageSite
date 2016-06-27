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
    Route::resource('school', 'Web\SchoolController', ['only' => ['index', 'show', 'create']]);
    Route::resource('admin/school', 'Web\AdminSchoolController', ['only' => ['index', 'show', 'create', 'edit']]);
    Route::get('admin/schoolandlocation/create/{school}', 'Web\AdminSchoolandlocationController@create')->name('admin.schoolandlocation.create');
    Route::resource('admin/schoolandlocation', 'Web\AdminSchoolandlocationController', ['only' => ['index', 'show', 'edit']]);
    Route::resource('admin/gebruiker', 'Web\AdminGebruikerController', ['only' => ['index', 'show','edit','create']]);
    Route::resource('admin/stage', 'Web\AdminStageController', ['only' => ['index', 'show','create']]);
    Route::resource('admin', 'Web\AdminController', ['only' => ['index', 'show']]);
    Route::resource('stage', 'Web\StageController', ['only' => ['index', 'show', 'create']]);
    Route::resource('stagebeheer', 'Web\StagebeheerController', ['only' => ['index', 'show', 'edit', 'create']]);
    Route::resource('tool', 'Web\ToolController', ['only' => ['index', 'show', 'edit', 'create']]);

});

Route::group(['middleware' => ['auth', 'api'], 'namespace' => 'Api'], function() {

    Route::resource('admin/school', 'AdminSchoolController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('admin/schoolandlocation', 'AdminSchoolandlocationController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('admin/gebruiker', 'AdminGebruikerController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('stagebeheer', 'StagebeheerController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('stage', 'StageController', ['only' => ['destroy', 'store']]);
    Route::resource('admin/stage', 'AdminStageController', ['only' => ['store']]);
    Route::resource('tool', 'ToolController', ['only' => ['store']]);

});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('profile', 'ProfileController@index');

/*Route::get('/profile/edit', 'ProfileController@show')->name('profile.edit');*/
Route::get('profile/edit/{id}', 'ProfileController@show');
Route::put('profile/update','ProfileController@update' );

