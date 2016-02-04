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



Route::get('home', 'HomeController@index');

Route::get('send','EmailController@index');

Route::post('store','EmailController@store');


Route::get('/', function () {
    return view('Welcome');
});
Route::get('/', 'Auth\AuthController@getLogin');

// Route::get('login', 'Auth\AuthController@getLogin');
// Route::get('register', 'Auth\AuthController@getRegister');
// Route::get('forgotpassword', 'Auth\PasswordController@get');

Route::controllers([

	'' => 'Auth\AuthController',
	'/' =>'Auth\PasswordController',

	//'logout' =>'Auth\AuthController',
]);

//Route::