<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('userPages.front.home');
	}

	public function createEventDetails()
	{
		return View::make('userPages.front.form1');
	}

	public function createEventHost()
	{
		return View::make('userPages.front.form2');
	}

	public function createEventImage()
	{
		return View::make('userPages.front.form3');
	}



}