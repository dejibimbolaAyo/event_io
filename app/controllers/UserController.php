<?php
use App\Models\User;
use App\Models\Even_t;
use App\Models\EventAttendee;
use App\Models\EventDetail;
use App\Models\EventHost;
use App\Models\EventImg;
use App\Models\EventType;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class UserController extends BaseController {
	public function storeSignUp()
	{
		$data = Input::all();
		$validator = Validator::make($data,['password' =>'required|min:6|confirmed',
											'email'=>'email|required',
											'username'=>'min:6|required'
											]);
		if($validator->fails())
		{
			return Redirect::to('/')->withErrors($validator)->withMessage('Not Signed up successful');
		}
		else
		{
			$user = new User;
			$data['password'] = Hash::make($data['password']);
			$data['role_id'] = 2;
			$user->fill($data);
			$user->save();
			return Redirect::to('/')->withMessage('Signed Up successfully, You may now Login');
		}
	}

	public function saveSession()
	{
		$saveSession = Session::all();
		return $saveSession;
	}

	public function storeEventId($savedSession)
	{
		if (isset($savedSession['slug']))
		{
			$slug = $savedSession['slug'];
			// dd($slug);
			//perform some operatons on the slug
			$event_id = Even_t::where('slug', '=', $slug)->first()->id;
			return $event_id;
		}
		elseif (isset($savedSession['slug2']))
		{
			$slug = $savedSession['slug2'];
			// dd($slug);
			//perform some operatons on the slug
			$event_id = Even_t::where('slug', '=', $slug)->first()->id;
			return $event_id;
		}
		elseif (isset($savedSession['slug3']))
		{
			$slug = $savedSession['slug3'];
			// dd($slug);
			//perform some operatons on the slug
			$event_id = Even_t::where('slug', '=', $slug)->first()->id;
			return $event_id;
		}
		elseif (isset($savedSession['slug4']))
		{
			$slug = $savedSession['slug4'];
			// dd($slug);
			//perform some operatons on the slug
			$event_id = Even_t::where('slug', '=', $slug)->first()->id;
			return $event_id;
		}
		else
		{
			return Redirect::to('/')->withMessage('Successsfully Logged in');
		}
	}

	public function getEventSlug($savedSession)
	{
		if(isset($savedSession['slug']))
		{
			$event_slug = $savedSession['slug'];
			return $event_slug;
		}
		elseif(isset($savedSession['slug2']))
		{
			$event_slug = $savedSession['slug2'];
			return $event_slug;
		}
		elseif(isset($savedSession['slug3']))
		{
			$event_slug = $savedSession['slug3'];
			return $event_slug;
		}
		elseif(isset($savedSession['slug4']))
		{
			$event_slug = $savedSession['slug4'];
			return $event_slug;
		}
	}

	public function getEventPageID($savedSession)
	{
		//this function saves the session just before a guest gets authenticated, this allows for the session to be queried for the page id, as session gets recreated on Auth
		if(isset($savedSession['page4']))
		{
			$page_id = $savedSession['page4'];
			return $page_id;
		}
		elseif(isset($savedSession['page3']))
		{
			$page_id = $savedSession['page3'];
			return $page_id;
		}
		elseif(isset($savedSession['page2']))
		{
			$page_id = $savedSession['page2'];
			return $page_id;	
		}
		elseif (isset($savedSession['page1'])) {
			$page_id = $savedSession['page1'];
			return $page_id;
		}

	}

	public function getGuestProgress($event_id, $savedSession)
	{
		//this function gets an identifier from the session to determmine where a user has already gotten to in the event crreation process
		$page_id = $this->getEventPageID($savedSession);
		$slug = $this->getEventSlug($savedSession);
		if($page_id == 4)
		{
			//pageId == 4 is the login page for adamant user
			//check if guest user has already filled the event images form, then redirects after loggin in to home with success message
			$event_user =Even_t::find($event_id);
			$event_user->user_id = Auth::user()->id;
			$event_user->save();
			Session::put('slug4', $slug);
			return Redirect::route('home')->withMessage('Event Created Successsfully');
		}
		elseif ($page_id == 3)
		{
			//pageId == 3 is the login page for image upload page
			//check if guest user has already filled the event host form, then redirects after loggin in to fill the images form
			$event_user =Even_t::find($event_id);
			$event_user->user_id = Auth::user()->id;
			$event_user->save();
			Session::put('slug3', $slug);
			return Redirect::route('eventImage')->withMessage('Succesfully Logged In, You may Continue With Event Creation');
		}
		elseif ($page_id == 2)
		{
			//check if guest user has already filled the event details form, then redirects after loggin in to fill the Host form
			$event_user =Even_t::find($event_id);
			$event_user->user_id = Auth::user()->id;
			$event_user->save();
			Session::put('slug2', $slug);

			return Redirect::route('eventHost')->withMessage('Succesfully Logged In, You may Continue With Event Creation')->with('slug', $slug);
		}
		elseif ($page_id == 1)
		{
			$event_user =Even_t::find($event_id);
			$event_user->user_id = Auth::user()->id;
			$event_user->save();
			Session::put('slug', $slug);
			return Redirect::route('eventDetails2')->withMessage('Succesfully Logged In, You may Continue With Event Creation');
		}
	}
	// 	public function getGuestProgress($event_id)
	// {//this function has been overtaken by some craze....will find a fix to it in my next life :-(, refer to the function above...it does what $this could not do..... :-p
	// 	$monitor_eventID = $event_id;
	// 	$test1 = EventImg::where('event_id', '=', $monitor_eventID)->get();
	// 	$test2 = EventHost::where('event_id', '=', $monitor_eventID)->get();
	// 	$test3 = EventDetail::where('event_id', '=', $monitor_eventID)->get();
	// 	echo '<pre>';
	// 	dd(DB::getQueryLog()) ;
	// 	echo '</pre>';
	// 	if(!$test1->isEmpty())
	// 	{
	// 		//check if guest user has already filled the event images form, then redirects after loggin in to home with success message
	// 		$event_user = new Even_t;
	// 		$event_user->where('id', '=', $event_id)->select();
	// 		$event_user->user_id = Session::get('user_id');
	// 		$event_user->save();
	// 		return Redirect::route('home')->withMessage('Event Created Successsfully');
	// 	}
	// 	elseif (!$test2->isEmpty())
	// 	{
	// 		//check if guest user has already filled the event host form, then redirects after loggin in to fill the images form
	// 		$event_user = new Even_t;
	// 		$event_user->where('id', '=', $event_id)->select();
	// 		$event_user->user_id = Session::get('user_id');
	// 		$event_user->save();
	// 		return Redirect::route('eventImage')->withMessage('Succesfully Logged In, You may Continue With Event Creation');
	// 	}
	// 	elseif (!$test3->isEmpty()) {
	// 		//check if guest user has already filled the event details form, then redirects after loggin in to fill the Host form
	// 		$event_user = new Even_t;
	// 		$event_user->where('id', '=', $event_id)->select();
	// 		$event_user->user_id = Session::get('user_id');
	// 		$event_user->save();
	// 		return Redirect::route('eventHost')->withMessage('Succesfully Logged In, You may Continue With Event Creation');
	// 	}
	// 	else
	// 	{
	// 		return Redirect::route('eventDetails')->withMessage('Succesfully Logged In, You may Continue With Event Creation');
	// 	}
	
	public function loginFailer()
	{
		return Redirect::to('/')->withMessage('Not Successsfully Logged In');
	}
	public function login()
	{
		//save the current running session as login creates new session
		$savedSession = $this->saveSession();
		$data = Input::all();
		$validator = Validator::make($data, ['password' => 'required|min:6',
											'email' => 'email'
			]);
		if($validator->passes())
			{
			if(Auth::attempt($data))
			{
				$user = Auth::user();
				if(isset($savedSession['page1'])||isset($savedSession['page2'])||isset($savedSession['page3'])||isset($savedSession['page4']))
				{	
					$event_id = $this->storeEventId($savedSession);
					$redirectUrl = $this->getGuestProgress($event_id, $savedSession);
					return $redirectUrl;
				}
				else
				{
					return Redirect::to('/')->withMessage('Logged in Succesfully');
				}
			}
			else
			{
				$redirectUrl = $this->loginFailer();
				return $redirectUrl;
			}
		}
		else
		{
			$this->loginFailer();
		}
	}

}