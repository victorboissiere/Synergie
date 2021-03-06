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
Route::get('testimonials', ['as' => 'testimonials', 'uses' => 'WelcomeController@testimonials']);
Route::post('testimonials', ['as' => 'add-testimonial', 'uses' => 'WelcomeController@addTestimonial']);
Route::get('blog/post/{id}', ['as' => 'simple_post', 'uses' => 'WelcomeController@show_simple_post']);
Route::get('a-propos', ['as' => 'about', 'uses' => 'WelcomeController@about']);
Route::get(env('ADMIN_URL', 'admin'), ['as' => 'login', 'uses' => 'Admin\LoginController@login']);
Route::post(env('ADMIN_URL', 'admin'), ['as' => 'postLogin', 'uses' => 'Admin\LoginController@postLogin']);
Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Admin\DashboardController@index']);

//API
Route::get('checkauth', ['as' => 'checkauth', 'uses' => 'API\BasicAPIController@checkauth']);

//post
Route::resource('admin-posts', 'Admin\Posts\PostsController',
                ['except' => 'show']);

Route::resource('admin-pages', 'Admin\Pages\PagesController',
                ['except' => ['show', 'create', 'store', 'destroy']]);

Route::resource('admin-testimonials', 'Admin\Testimonials\TestimonialsController',
                ['except' => 'show']);

//routes used for ajax. Modify testimonial status
Route::post('testimonials/publish/{id}', ['as' => 'testimonial-publish', 'uses' => 'Admin\Testimonials\TestimonialsController@publish']);
Route::post('testimonials/waiting/{id}', ['as' => 'testimonial-waiting', 'uses' => 'Admin\Testimonials\TestimonialsController@waiting']);

//users
Route::resource('admin-users', 'Admin\Users\UserController',
    ['except' => 'show']);

//security
Route::get('/security', ['as' => 'admin-security', 'uses' => 'Admin\Security\SecurityController@index']);

//settings
Route::get('/settings', ['as' => 'admin-settings', 'uses' => 'Admin\Settings\SettingsController@index']);
Route::put('/settings', ['as' => 'admin-settings', 'uses' => 'Admin\Settings\SettingsController@store']);

//not indexed routes
Route::get('/calendar', ['as' => 'calendar', 'uses' => 'WelcomeController@calendar']);

Route::get('auth/logout', 'Auth\AuthController@getLogout');
