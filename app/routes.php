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

Route::get('/', 'HomeController@index');

Route::get('/create/form1', 'HomeController@createEventDetails');
Route::post('event/detail', ['uses'=>'event/detail', 'as'=>'EventController@storeEventDetail']);

Route::get('/create/form2', 'HomeController@createEventHost');

Route::get('/create/form3', 'HomeController@createEventImage');

