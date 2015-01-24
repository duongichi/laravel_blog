<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
//

Route::get('/post/{post}/show', ['as' => 'post.show', 'uses' => 'PostController@show']);
Route::get('/post/list', ['as' => 'post.list', 'uses' => 'PostController@list']);
Route::get('/post/new', ['as' => 'post.new', 'uses' => 'PostController@new']);
Route::get('/post/{post}/edit', ['as' => 'post.edit', 'uses' => 'PostController@edit']);
Route::get('/post/{post}/delete', ['as' => 'post.delete', 'uses' => 'PostController@delete']);
Route::post('/post/save', ['as' => 'post.save', 'uses' => 'PostController@save']);

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

// Dashboard route 
Route::get('userpanel/dashboard', function(){ return View::make('userpanel.dashboard'); }); 
 
// Applies auth filter to the routes within admin/ 
Route::when('userpanel/*', 'auth');