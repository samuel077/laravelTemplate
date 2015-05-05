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

Route::get('login', 'backendController@login');

Route::get('loginFail', 'backendController@loginFail');

Route::get('logout', 'backendController@logout');

Route::get('case-create', 'backendController@caseCreate');

Route::get('case-manage', 'backendController@caseManage');

Route::get('mainPage', 'backendController@mainPage');

Route::post('loginCheck', 'backendController@loginCheck');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
