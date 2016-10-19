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
		if(Auth::check())
		{
			//this function gets info about the user logged in or a guest
			$user_id = Auth::user()->id;
			$user = User::where('id', '=', $user_id)->first();
			$data = $user;
			return $data;
		}
		else
		{
			$guest = User::where('email', '=', 'guest@event.io')->first();
			$data = $guest;
			return $data;
		}

	}
	public function createEventDetails2()
	{
		//this function creates event detail form, i have two of create event function as one generates a slug, and slug is not needed in the instance where it has been generated before the user gets authenticated
		$data = $this->getUser();
		$e_types = EventType::all();
		return View::make('userPages.front.form1')->with(['e_types'=> $e_types, 'user_data' => $data]);
	}

	public function createEventDetails()
	{

		$data = $this->getUser();
		$even_t = new Even_t;
		//generate slug for event
		$even_t['user_id'] = $data->id;
		$even_t['slug'] = $this->slugger;
		$page_id = 1;
		$even_t->save();
		Session::put('page1', $page_id);
		Session::put('slug', $even_t['slug']);
		$e_types = EventType::all();
		return View::make('userPages.front.form1')->with(['e_types'=> $e_types, 'user_data' => $data]);
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
		$templates = EventTemplate::all();
		return View::make('userPages.front.choose_template')->with('templates', $templates);
	}

	public function getTemplate($template_id)
    {
    	//this function loads details about a template onto view
        $template_details = EventTemplate::where('id', '=', $template_id)->first();
        $response = Response::json($template_details);
        echo '<pre>';
        dd($response);
        echo '</pre>';
        return $response;
    }

	public function adamantUserPage()
	{
		$event_slug = Session::get('slug4');
		return View::make('userPages.front.home');
	}

}