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

Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@index']);
Route::get('blog', ['as' => 'blog', 'uses' => 'WelcomeController@blog']);
Route::get('blog/post/{id}', ['as' => 'simple_post', 'uses' => 'WelcomeController@show_simple_post']);
Route::get('a-propos', ['as' => 'about', 'uses' => 'WelcomeController@about']);
Route::get(env('ADMIN_URL', 'admin'), ['as' => 'login', 'uses' => 'Admin\LoginController@login']);
Route::post(env('ADMIN_URL', 'admin'), ['as' => 'postLogin', 'uses' => 'Admin\LoginController@postLogin']);
Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Admin\DashboardController@index']);

//post
Route::resource('admin-posts', 'Admin\Posts\PostsController',
                ['except' => 'show']);

//users
Route::resource('admin-users', 'Admin\Users\UserController',
    ['except' => 'show']);

//security
Route::get('/security', ['as' => 'admin-security', 'uses' => 'Admin\Security\SecurityController@index']);

//settings
Route::get('/settings', ['as' => 'admin-settings', 'uses' => 'Admin\Settings\SettingsController@index']);
Route::put('/settings', ['as' => 'admin-settings', 'uses' => 'Admin\Settings\SettingsController@store']);

Route::get('auth/logout', 'Auth\AuthController@getLogout');
