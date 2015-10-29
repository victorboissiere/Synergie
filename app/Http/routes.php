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

Route::get('/', array('as' => 'home', 'uses' => 'WelcomeController@index'));
Route::get('/blog', array('as' => 'blog', 'uses' => 'WelcomeController@blog'));
Route::get('/a-propos', array('as' => 'about', 'uses' => 'WelcomeController@about'));
Route::get(env('ADMIN_URL', 'admin'), array('as' => 'login', 'uses' => 'Admin\LoginController@login'));
Route::post(env('ADMIN_URL', 'admin'), array('as' => 'postLogin', 'uses' => 'Admin\LoginController@postLogin'));
Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'Admin\DashboardController@index'));
Route::get('auth/logout', 'Auth\AuthController@getLogout');