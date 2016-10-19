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

Route::get('/', ['uses'=>'HomeController@index', 'as'=>'home']);

Route::post('login', ['as'=>'login', 'uses'=>'UserController@login']);

Route::post('store/signup', ['as'=>'storeSignup', 'uses'=>'UserController@storeSignUp']);

Route::get('/create/event/details', ['uses'=>'HomeController@createEventDetails', 'as'=> 'eventDetails']);
Route::get('/create/event/detail_s', ['uses'=>'HomeController@createEventDetails2', 'as'=> 'eventDetails2']);
Route::post('/store/event/details', ['uses'=>'EventController@storeEventDetails', 'as'=> 'storeEventDetails']);

// Route::post('event/detail', ['uses'=>'eventDetail', 'as'=>'EventController@storeEventDetail']);

Route::get('/create/event/host', ['as'=>'eventHost', 'uses'=>'HomeController@createEventHost']);
Route::post('/create/event/host', ['as'=>'storeEventHost', 'uses'=>'EventController@storeEventHost']);


Route::get('/create/event/images', ['as'=>'eventImage', 'uses'=>'HomeController@createEventImage']);
Route::post('/create/event/images', ['as'=>'storeEventImage', 'uses'=>'EventController@storeEventImages']);

Route::get('/create/event/template', ['as'=>'chooseTemplate', 'uses'=>'HomeController@chooseTemplate']);

Route::get('/template/{template_id}', ['as'=>'getTemplate', 'uses'=>'HomeController@getTemplate']);

Route::get('/adamant/user', ['as'=>'adamantUser', 'uses'=>'HomeController@adamantUserPage']);

Route::get('/user/dashboard', ['as'=>'userDashboard', 'uses'=>'DashboardController@index']);
