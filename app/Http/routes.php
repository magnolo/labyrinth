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

Route::get('/', 'HomeController@index');

Route::group(array('prefix' => 'api'), function(){
		Route::resource('users', 'UsersController');
		Route::resource('pages', 'PagesController' );
		Route::resource('galleries', 'GalleriesController');
		Route::resource('sliders', 'SlidersController');
		Route::resource('downloads', 'DownloadsController');
		Route::resource('links', 'LinksController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
