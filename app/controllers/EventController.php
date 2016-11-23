<?php
use App\Models\Even_t;
use App\Models\EventAttendee;
use App\Models\EventDetail;
use App\Models\EventHost;
use App\Models\EventImg;
use App\Models\EventType;
use App\Models\EventTemplate;




class EventController extends \BaseController {

	public function storeEventDetails()
	{
		//this function stores event details
		$data = Input::all();
		$validator = Validator::make($data,[
				'event_name' => 'required',
				'event_time_from' => 'required',
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
			$event_detail->event_slug = $slug;
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
		$event_host->event_id = Even_t::where('slug', '=', $data['slug'])->first()->id;		
		$event_host->fill($data);
		$event_host->save();
		$page_id = 3;
		Session::put('page3', $page_id);
		Session::put('slug3', $data['slug']);

		return Redirect::to('/create/event/images')->with('slug', $data['slug']);
	}

	public function storeEventImages()
	{
		//this function will save the images provided for the event into the required table 'event_img table'

		/*
		these are functions on file uploa:::::: getClientOriginalName, getClientOriginalExtension, getClientMimeType, guessClientExtension, getClientSize, getError, isValid, getMaxFilesize, getErrorMessage
		*/
		$event_img = new EventImg;
		$data = Input::all();
		$event_img->event_id = Even_t::where('slug', '=', $data['slug'])->first()->id;
		$image_logo = Input::file('event_logo');
		$image_banner = Input::file('event_banner');
		$logo_name = time() . "_" . $image_logo->getClientOriginalName();
		$banner_name = time() . "_" . $image_banner->getClientOriginalName();
		Image::make($image_logo->getRealPath())->resize(200, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path(). '/assets/logo/' . $logo_name);
		Image::make($image_banner->getRealPath())->resize(400, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path(). '/assets/banner/' . $banner_name);
  		$event_img->event_logo_url = '/assets/logo/' . $logo_name;
  		$event_img->event_banner_url = '/assets/banner/' . $banner_name;
		$event_img->fill($data);
		$event_img->save();
		$page_id = 4;
		Session::put('page4', $page_id);
		Session::put('slug4', $data['slug']);

		if(!Auth::check())
		{
			return Redirect::to('/adamant/user/log_in')->withMessage('Please will You try and Log in or Register???');
		}

		return Redirect::to('/template/preview/1')->withMessage('Event Created Successfully, Proceed to Choose a Template For your Event Page and a Custom Link to your Event');

	}

	public function previewTemplate($template_id)
	{
		//with this the page uri of a  template is loaded into the preview page
		$templates = new EventTemplate;
		$event_detail = new EventDetail;
		$event_host = new EventHost;
		$event_img = new EventImg;
		$templates = $templates->all();
		$event_slug = Session::get('slug4');
		$event = new Even_t;
		$event_id = $event->where('slug', '=', $event_slug)->first()->id;
		$event_details = $event_detail->where('event_id', '=', $event_id)->first();
		$event_hosts = $event_host->where('event_id', '=', $event_id)->first();
		$event_imgs = $event_img->where('event_id', '=', $event_id)->first();
		$event_template = $templates->find($template_id);
		$event_countdown = strtotime($event_details->event_time_from);
		// echo '<pre>';
		// dd($event_template->template_url);
		// echo '</pre>';

		return View::make('userPages.front.choose_template')->with(['event_template'=> $event_template, 'event_countdown'=>$event_countdown, 'templates'=>$templates, 'template_id'=>$template_id, 'event_details'=> $event_details, 'event_hosts'=> $event_hosts, 'event_imgs'=> $event_imgs]);
		//it picks the template id to get the template url from database, the template url is now appended to the @include inside the choose template
	}

	public function chooseTemplate($template_id)
	{
		$event = new Even_t;
		$templates = new EventTemplate;
		$event_detail = new EventDetail;
		$event_host = new EventHost;
		$event_img = new EventImg;
		//this funvtion allows the user to make a template choice...(to select and set a particular templates as their event page template)
		$event_slug = Session::get('slug4');
		$event_id = $event->where('slug', '=', $event_slug)->first()->id;
		$event_detail = $event_detail->where('event_id', '=', $event_id)->first();
		//this sets the template id on the event detail table
		$event_detail->event_template_id = $template_id;
		$event_detail->save();
		//this also loads the event page as it would be view by everyone else
		//this loads the main page from eventPages\templates\main.blade.php
		$event_details = $event_detail->where('event_id', '=', $event_id)->first();
		$event_hosts = $event_host->where('event_id', '=', $event_id)->first();
		$event_imgs = $event_img->where('event_id', '=', $event_id)->first();
		$event_template = $templates->find($template_id);
		$event_countdown = strtotime($event_details->event_time_from) - time();
		return View::make('eventPages.templates.main')->with(['event_template'=> $event_template, 'event_countdown'=>$event_countdown, 'templates'=>$templates, 'template_id'=>$template_id, 'event_details'=> $event_details, 'event_hosts'=> $event_hosts, 'event_imgs'=> $event_imgs]);
	}

	public function eventPage($slug)
	{
		$event_detail = new EventDetail;
		$templates = new EventTemplate;
		$event_host = new EventHost;
		$event_img = new EventImg;
		$event_details = $event_detail->where('event_slug', '=', $slug)->first();
		// 	echo '<pre>';
		// dd($event_details);
		// echo '</pre>';
		$event_id = $event_details->event_id;
		$event_hosts = $event_host->where('event_id', '=', $event_id)->first();
		$event_imgs = $event_img->where('event_id', '=', $event_id)->first();
		$template_id = $event_details->event_template_id;
		$event_template = $templates->find($template_id);
		$event_countdown = strtotime($event_details->event_time_from) - time();
		return View::make('eventPages.templates.main')->with(['event_template'=> $event_template, 'event_countdown'=>$event_countdown, 'templates'=>$templates, 'template_id'=>$template_id, 'event_details'=> $event_details, 'event_hosts'=> $event_hosts, 'event_imgs'=> $event_imgs]);
	}

	/*
	* 
	*/
	public function bookEvent($event_id)
	{
		//this function registers an attendee for an event
		$data = Input::all();
		//data contains inputs from attendee to an event
		$attendee = new EventAttendee;
		$seats = $this->getSeats($event_id);
		$data['seat_no'] = $seats;
		$data['event_id'] = $event_id;
		$attendee->fill($data);
		$attendee->save();
		//decrease number of seat per booking where applicable
			
		if(isset($seats))
		{	
			$event_detail = new EventDetail;
			$seats = $seats - 1;
			$event_detail->update(['event_seats' => $seats]);
		}
		return Redirect::back()->withMessage('The Host is glad you are Coming ;-)');
	}

	public function getSeats($event_id)
	{
		//this function gets the number of seats available/remaining for an event
		$seats = EventDetail::where('event_id', '=', $event_id)->first()->event_seats;
		return $seats;

	}

	public function getSeatsJson($event_id)
	{
		//this function gets the number of seats available/remaining for an event this would return a json response
		$seats = Even_t::where('id', '=', $event_id)->first()->seats;
		return $seats;

	}

	public function dashboard()
	{
		$user_id = Auth::user()->id;
		$even_t = new Even_t;
		$even_t = $even_t->where('user_id', '=', $user_id)->get();
		$event_count = $even_t->count();
		return View::make('userPages.dashboard.home')->with(['event']);

	}

	public function eventDetailpage($slug)
	{	
		$even_t = new Even_t;
		$event_detail = new EventDetail;
		$templates = new EventTemplate;
		$event_host = new EventHost;
		$event_img = new EventImg;
		$event_details = $event_detail->where('event_slug', '=', $slug)->first();
		$event_id = $event_details->event_id;
		$event_hosts = $event_host->where('event_id', '=', $event_id)->first();
		$event_imgs = $event_img->where('event_id', '=', $event_id)->first();
		$template_id = $event_details->event_template_id;
		$event_template = $templates->find($template_id);
		$event_countdown = strtotime($event_details->event_time_from) - time();
		$event_detail_array = array('event_template'=> $event_template, 'event_countdown'=>$event_countdown, 'event_templates'=>$event_logo_templates, 'template_id'=>$template_id, 'event_details'=> $event_details, 'event_hosts'=> $event_hosts, 'event_imgs'=> $event_imgs);
			echo '<pre>';
		dd($event_detail_array);
		echo '</pre>';
		return View::make('userPages.dashboard.event_details');
	}

	public function deleteEvent($event_id)
	{
		//this function deletes an event from the database (from the Even_t, from EventDetail, EventHost etc)
		$event = new Even_t;
		$event_details = new EventDetail;
		$event_host = new EventHost;
		$event_img = new EventImg;
		$event_img->where('event_id', '=', $event_id)->first()->delete();
		$event_host->where('event_id', '=', $event_id)->first()->delete();
		$event_details->where('event_id', '=', $event_id)->first()->delete();
		$event->where('event_id', '=', $event_id)->first()->delete();

		return Redirect::back();

	}


	public function updateSlug($event_id)
	{
		//this function helps in customizing a slug

	}

	public function updateTemplate($event_id)
	{
		//this function helps in choosing a new template for an event
	}

	public function updateSeats($event_id)
	{
		//this function sets a new value for seats available for an event, this is done by addition
	}

}