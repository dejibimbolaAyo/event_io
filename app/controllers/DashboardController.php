<?php
use App\Models\Even_t;
use App\Models\EventAttendee;
use App\Models\EventDetail;
use App\Models\EventHost;
use App\Models\EventImg;
use App\Models\EventType;

class DashboardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('userPages.dashboard.home');
	}

	public function allEventsPage()
	{
		return View::make('userPages.dashboard.allEvent');
	}

	public function eventPage()
	{
		return View::make('userPages.dashboard.event');
	}


	public function showAllEvent()
	{
		//this function displays all the event created by the user
		$user_id = Session::get('user_id');
		$event_all = Even_t::find($user_id);
		return Redirect::action('DashboardController@allEventsPage')->with('event_all', $event_all);
	}


	public function showEvent($event_id)
	{
		//this function displays a particular event created by the user
		$even_t = Even_t::where('id', '=', $event_id);
		return Redirect::action('DashboardController@eventPage')->with('even_t', $even_t);
	}

	/**
	 * manage an event, update the event details like, seats available, if seats option was created, then the template can be updated.
	 * as well as the slug of the event, then the event can entirely be deleted
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dashboard/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dashboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dashboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}