<?php

class EventController extends \BaseController {

	public function storeEventDetails()
	{
		//this function stores event details
		$data = Input::all();
		$validator = Validator::make($data,[
				'event_name' => 'required',
				'event_date' => 'date|required',
				'event_email' => 'email|required',
				'event_phone' => 'required|max:14',
				'event_location' => 'required|min:10',
				'event_description' => 'required|min:10',
			]);

		if ($validator->passes())
		{
		// 	//create an event on the event table with a user id, to generate an event id, a slug as well
			$event_detail = new EventDetail;
			$data = Input::all();
		//pull slug from the session
			$slug = Session::get('slug');
			$data['event_id'] = Even_t::where('slug', '=', $slug)->first()->id;
			$event_detail->fill($data);
			$event_detail->save();
			$page_id = 2;
			Session::put('page2', $page_id);
			Session::put('slug2', $slug);
			return Redirect::route('eventHost')->withSlug($slug);
		}
		else
		{
			$messages = $validator->messages();
			return Redirect::back()->withMessage('Fill the Required Fields on the Event Detail Form')->withErrors($validator);
		}
	}

	public function storeEventHost()
	{
		//this funtion takes a slug runs it against the database by using the event_id to return the slug then if the slug matches what was sent from the route the event creation can then continue....tho this is completely not so necessary....i did it cos i can...so lets get to it''''''i change my mind....this function juat uses the slug to query the event database to ge an event id.....cool but not hot.....
		$event_host  = new EventHost;
		$data = Input::all();
		$event_id = Even_t::where('slug', '=', $data['slug'])->first()->id;
		$data['event_id'] = $event_id;		
		$event_host->fill($data);
		$event_host->save();
		$page_id = 3;
		Session::put('page3', $page_id);
		Session::put('slug3', $slug);

		return Redirect::to('/create/event/images')->with('slug', $data['slug']);
	}

	public function storeEventImages()
	{
		//this function will save the images provided for the event into the required table 'event_img table'

		/*
		these are functions on file uploa:::::: getClientOriginalName, getClientOriginalExtension, getClientMimeType, guessClientExtension, getClientSize, getError, isValid, getMaxFilesize, getErrorMessage
		*/
		$data = Input::all();
		$event_id = Even_t::where('slug', '=', $data['slug'])->first()->id;
		$data['event_id'] = $event_id;
		// $image = Input::file('event_logo');
		// Image::make($image->getRealPath())->resize(200, 200)->save(public_path() . '/assets/logo/' . $imagename);
  		// $channel->logo_url = '/assets/logo/' . $imagename;
		// $imagename = time() . "-" . $image->getClientOriginalName();
		$event_img = new EventImg;
		$event_img->fill($data);
		$event_img->save();
		$page_id = 4;
		Session::put('page4', $page_id);
		Session::put('slug4', $slug);

		if(!Auth::check())
		{
			return Redirect::to('/adamant/user')->withMessage('Please will You try and Log in or Register???');
		}

		return Redirect::route('chooseTemplate')->withMessage('Event Created Successfully, Proceed to Choose a Template For your Event Page and a Custom Link to your Event');

	}

	public function bookEvent()
	{
		//this function registers an attendee for an event
	}

	public function getSeats()
	{
		//this function gets the number of seats available/remaining for an event
	}

	public function deleteEvent($event_id)
	{
		//this function deletes an event from the database (from the Even_t, from EventDetail, EventHost etc)
	}

	public function updateSlug($event_id)
	{
		//this function helps in customizing a slug
	}

	public function updateTemplate($event_id)
	{
		//this function helps in choosing a new template for an event
	}

	public function updateSeats($id)
	{
		//this function sets a new value for seats available for an event
	}

}