<?php

use Rap2hpoutre\LaravelLogViewer;

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

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', ['uses'=>'HomeController@index', 'as'=>'home']);

Route::get('/event/{{slug}}', ['uses'=>'HomeController@eventPage', 'as'=>'eventPage']);

Route::post('login', ['as'=>'login', 'uses'=>'UserController@login']);

Route::post('store/signup', ['as'=>'storeSignup', 'uses'=>'UserController@storeSignUp']);

Route::get('/create/event/details', ['uses'=>'HomeController@createEventDetails', 'as'=> 'eventDetails']);
Route::get('/create/event/detail_s', ['uses'=>'HomeController@createEventDetails2', 'as'=> 'eventDetails2']);
Route::post('/store/event/details', ['uses'=>'EventController@storeEventDetails', 'as'=> 'storeEventDetails']);

Route::get('event/recent', ['as'=>'recentEvents', 'uses'=>'EventController@allEvent']);

Route::get('/create/event/host', ['as'=>'eventHost', 'uses'=>'HomeController@createEventHost']);
Route::post('/create/event/host', ['as'=>'storeEventHost', 'uses'=>'EventController@storeEventHost']);


Route::get('/create/event/images', ['as'=>'eventImage', 'uses'=>'HomeController@createEventImage']);
Route::post('/create/event/images', ['as'=>'storeEventImage', 'uses'=>'EventController@storeEventImages']);

Route::get('/create/event/template', ['as'=>'chooseTemplate', 'uses'=>'HomeController@chooseTemplate']);

Route::get('/template/preview/{template_id}', ['as'=>'previewTemplate', 'uses'=>'EventController@previewTemplate']);

Route::get('/template/choose/{template_id}', ['as'=>'chooseTemplate', 'uses'=>'EventController@chooseTemplate']);

Route::get('/adamant/user/log_in', ['as'=>'adamantUserLogin', 'uses'=>'HomeController@adamantUserLogIn']);

Route::get('/adamant/user/sign_up', ['as'=>'adamantUserSignUp', 'uses'=>'HomeController@adamantUserSignUp']);

Route::get('/{slug}', ['as'=>'eventPage', 'uses'=>'EventController@eventPage']);

Route::post('/book/{event_id}', ['as'=>'bookEvent', 'uses'=>'EventController@bookEvent']);

Route::group(['before' => 'auth'], function(){
	Route::get('/user/dashboard', ['as'=>'userDashboard', 'uses'=>'DashboardController@index']);
	Route::get('event/delete/{event_id}', ['uses'=>'deleteEvent', 'as'=>'EventController@deleteEvent']);
	Route::get('dashboard/event/{slug}', ['uses'=>'eventDetailpage', 'as'=>'EventController@eventDetailpage']);
	Route::post('/event/update_seat',  ['uses'=>'EventController@updateSeats', 'as'=> 'updateSeats']);
	Route::post('/event/update_eventTemplate',  ['uses'=>'EventController@updateTemplate', 'as'=> 'updateTemplate']);
	Route::post('/event/update_slug',  ['uses'=>'EventController@updateSlug', 'as'=> 'updateSlug']);
});
