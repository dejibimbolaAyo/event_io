<?php
use App\Models\Even_t;
use App\Models\EventAttendee;
use App\Models\EventTemplate;
use App\Models\EventDetail;
use App\Models\EventHost;
use App\Models\EventImg;
use App\Models\EventType;
use App\Models\User;

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
	/*
		@var slugger
	*/
	public $slugger;
		//the constructor sets some constants like slug, this is useless...untill i learn how to use constans nd how they are set with a constructor
	public function __construct()
	{
		//this function generates a slug on the request of the createEventDetail() function
		$this->slugger = str_random(32);
	}
	public function index()
	{
		return View::make('userPages.front.home');
	}
	public function getUser()
	{
		//this function sets the user/ guest id (the guest is assummin a registeered user priviledge but would be monitored to restrict his abilities, so write a function that limit his abilities, like an authentication level that excludes a guest from having the full capabilities of a signed up user)
		$user = new User;
		if(Auth::check())
		{
			//this function gets info about the user logged in or a guest
			$user_id = Auth::user()->id;
			$user = $user->where('id', '=', $user_id)->first();
			$data = $user;
			return $data;
		}
		else
		{
			$guest = $user->where('email', '=', 'guest@event.io')->first();
			$data = $guest;
			return $data;
		}
	}
	public function createEventDetails2()
	{
		//this function creates event detail form, i have two of create event function as one generates a slug, and slug is not needed in the instance where it has been generated before the user gets authenticated
		$user_data = $this->getUser();
		$e_types = new EventType;
		$e_types = $e_types->all();
		return View::make('userPages.front.form1')->with(['e_types'=> $e_types, 'user_data' => $user_data]);
	}
	public function createEventDetails()
	{
		$user_data = $this->getUser();
		$even_t = new Even_t;
		//generate slug for event
		$even_t->user_id = $user_data->id;
		$even_t->slug = $this->slugger;
		$page_id = 1;
		$even_t->save();
		Session::put('page1', $page_id);
		Session::put('slug', $even_t->slug);
		$e_types = EventType::all();
		return View::make('userPages.front.form1')->with(['e_types'=> $e_types, 'user_data' => $user_data]);
	}
	public function createEventHost()
	{
		$event_slug = Session::get('slug2');
		return View::make('userPages.front.form2')->with('slug', $event_slug);
	}
	public function createEventImage()
	{
		$event_slug = Session::get('slug3');
		return View::make('userPages.front.form3')->with('slug', $event_slug);
	}
	public function chooseTemplate()
	{
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
		return View::make('userPages.front.choose_template')->with('templates', $templates)->with(['event_details'=> $event_details, 'event_hosts'=> $event_hosts, 'event_imgs'=> $event_imgs]);
	}
	public function getTemplate($template_id)
	{
		//this function loads details about a template onto view
		$templates = new EventTemplate;
		$template_details = $templates->where('id', '=', $template_id)->first();
		$event_slug = Session::get('slug4');
		return $response;
	}

	public function adamantUserLogIn()
	{
		$event_slug = Session::get('slug4');
		return View::make('userPages.front.adamantLogIn');
	}

	public function adamantUserSignUp()
	{
		
		return View::make('userPages.front.adamantSignUp')->with('event_details', $event_details);
	}

	public function eventPage($slug)
	{
		$event_details = Even_t::find($slug);
		View::make('eventPages.templates.main')->with('event_details', $event_details);
	}
}