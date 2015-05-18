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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::post('upload', ['as' => 'files.upload', 'uses' => 'HomeController@upload']);
Route::get('usuario/{userId}/download/{fileId}', ['as' => 'files.download', 'uses' => 'HomeController@download']);
Route::get('usuario/{userId}/remover/{fileId}', ['as' => 'files.destroy', 'uses' => 'HomeController@destroy']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
