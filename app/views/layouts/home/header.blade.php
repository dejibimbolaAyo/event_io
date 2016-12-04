<div class="container-fluid">
	<div class="navbar-wrapper">
		<div>
			<img src="{{URL::asset('assets/img/party1.jpg')}}" class="bg-img">
		</div>
		<div class="navbar navbar-inverse navbar-fixed header1">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand">
						<img src="{{URL::asset('assets/img/logo.png')}}" class="logo">
						<h3 class="logo2">vents</h3>
					</a>
				</div>
				@if(!Auth::check())
				<div class="navbar-right hidden-xs">
					<!-- <button class="btn btn-successs btn-lg navbar-btn start-btn">Create Events Now</button> -->
					<button class="btn btn-success nav-btn hvr-bob" data-toggle="modal" data-target="#login">Login</button>
					<button class="btn btn-success nav-btn hvr-bob" data-toggle="modal" data-target="#signUp">Sign Up</button>
				</div>
				<div class="text-center hidden-sm hidden-md hidden-lg" style="padding-top: 5vh">
					<!-- <button class="btn btn-successs btn-lg navbar-btn start-btn">Create Events Now</button> -->
					<button class="btn btn-success nav-btn hvr-bob" data-toggle="modal" data-target="#login">Login</button>
					<button class="btn btn-success nav-btn hvr-bob" data-toggle="modal" data-target="#signUp">Sign Up</button>
				</div>
				@else
				<div class="navbar-right hidden-xs">
					<!-- <button class="btn btn-successs btn-lg navbar-btn start-btn">Create Events Now</button> -->
					<a href=""><button class="btn btn-success nav-btn hvr-bob">Go to Dashboard</button></a>
				</div>
				<div class="text-center hidden-sm hidden-md hidden-lg" style="padding-top: 5vh">
					<!-- <button class="btn btn-successs btn-lg navbar-btn start-btn">Create Events Now</button> -->
					<a href=""><button class="btn btn-success nav-btn hvr-bob">Go to Dashboard</button></a>
				</div>
				@endif
			</div>
			@if(Session::has('message'))
			<div class="row text-center animated fadeOut" style="animation-delay: 2s">
				<div class="col-xs-12 alert-container">
					<div class="alert alert-dismissible alert-success col-xs-12" role="alert" style="display:inline-block; border-radius: 30px;">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times</span><span class="sr-only">Close</span></button>
						<div class="text-center">{{ Session::pull('message') }}</div>
					</div>
				</div>
			</div>
			@endif
			<div class="desc text-center">Showcase Your Event to the World!</div>
			<div class="text-center">
				<a href="{{URL::route('eventDetails')}}"><button class="btn btn-success start-btn hvr-push">Create Event Now</button></a>
			</div>
			<br>
			<br>
			<div class="text-center">
				<a href="{{URL::route('recentEvents')}}"><button class="btn btn-success start-btn hvr-push">View Recent Events</button></a>
			</div>
		</div>
		
	</div>
</div>