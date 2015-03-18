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

/*
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
*/
Route::get('/', 'PagesController@welcome');
Route::get('about', 'PagesController@about');
Route::get('students', 'PagesController@students');
Route::get('training', 'PagesController@training');
Route::get('certification', 'PagesController@certification');
Route::get('donations', 'PagesController@donations');
Route::get('contact', 'PagesController@contact');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
