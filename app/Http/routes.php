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
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('profile', 'ProfileController@index');

/*Route::get('/profile/edit', 'ProfileController@show')->name('profile.edit');*/
Route::get('profile/edit/{id}', 'ProfileController@show');
Route::put('profile/update','ProfileController@update' );

