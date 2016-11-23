<nav class="navbar navbar-default ui-navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<div class="navbar-brand animated fadeInLeft">
				<a href="/webUI2"><img class="logo" src="http://localhost:8000{{$event_imgs->event_logo_url}}"></a>
				{{$event_details->event_name}}
			</div>
		</div>
	</div>
</nav>
<div class="ui-line-pink animated fadeInRight"></div>
<div class="container">
	<!-- row for slider -->
	<div class="row animated fadeInUp">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" effect="slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="http://localhost:8000{{$event_imgs->event_banner_url}}" class="img-responsive">
				</div>
			</div>
			<!-- Controls -->
			{{-- 	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a> --}}
		</div>
	</div>
	<div class="row" style="padding-top: 20px">
		<div class="col-xs-12 col-sm-12 col-md-4 animated fadeInLeft">
			<div class="panel pad-top">
				<div class="panel panel-title ui-panel-heading1">
					<h2>Event Description</h2>
				</div>
				<div class="panel panel-body ui-panel-body">
					<h4>
					{{$event_details->event_description}}
					</h4>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 animated fadeInUp">
			<div class="panel pad-top">
				<div class="panel panel-title ui-panel-heading2">
					<h2>Event Details</h2>
				</div>
				<div class="panel panel-body ui-panel-body">
					<h4>
					{{$event_details->event_detail}}
					</h4>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 animated fadeInRight">
			<div class="panel pad-top">
				<div class="panel panel-title ui-panel-heading1">
					<h2>Event Venue</h2>
				</div>
				<div class="panel panel-body ui-panel-body">
					<h4>
					{{$event_details->event_location}}
					</h4>
				</div>
			</div>
		</div>
		<div class="row" style="padding-bottom: 30px">
			<div class="hidden-xs col-sm-2 col-md-2"></div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="col-xs-12 col-sm-8 col-md-8">
					{{-- this portion hold the countdown time to event day --}}
					<div class="countdown_message" style="padding: 20px;">
						<h2>Countdown to Event</h2>
					</div>
					<div style="width: 100%; height: auto" class="countdown" style="margin:1em;"></div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					{{-- this portion hold the countdown seats available --}}
					<div class="seat_message" style="padding: 20px;">
						<h2>Seats available</h2>
					</div>
					<div class="seat" style="margin:1em;"></div>
				</div>
			</div>
		</div>
		@if(isset($event_details->event_seats)&&$event_details->event_seats!= 0)
		<div class="row">
			<div class="col-xs-1 col-sm-3 col-md-3"></div>
			<div class="col-xs-10 col-sm-6 col-md-6">
				{{-- this portion holds the rsvp --}}
				<div class="" style="padding-top: 20px; padding-bottom: 20px">
						<h2>Book For Event</h2>
					</div>
				<form action="{{URL::route('bookEvent',$event_details->event_id)}}" enctype="multipart/form-data" method="post" >
					<div class="form-group">
						<label for="Name">First name</label>
						<input type="text=" first_name="first_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="Name">Last name</label>
						<input type="text=" first_name="last_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email=" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="phone_no">Phone Number</label>
						<input type="text=" name="phone_no" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success pull-right">Book Event</button>
					</div>
				</form>
			</div>
			<div class="col-xs-1 col-sm-3 col-md-3"></div>
		</div>
		@else
		<div class="row">
			<div class="hidden-xs col-sm-3 col-md-3"></div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				{{-- this portion holds the rsvp --}}
				<div class="" style="padding-top: 20px; padding-bottom: 20px; text-align: center">
						<h2>Event Fully Booked</h2>
						<h5>We appreciate your interest in coming  for our Event.</h5>
						<h6>Drop your contact, We would reach you if there is an Available Seat</h6>
					</div>
				<form action="{{URL::route('bookEvent',$event_details->event_id)}}" enctype="multipart/form-data" method="post" >
					<div class="form-group">
						<label for="Name">First name</label>
						<input type="text=" first_name="first_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="Name">Last name</label>
						<input type="text=" first_name="last_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email=" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="phone_no">Phone Number</label>
						<input type="text=" name="phone_no" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success pull-right">Book Event</button>
					</div>
				</form>
			</div>
			<div class="hidden-xs col-sm-3col-md-3"></div>
		</div>
		@endif
		<div class="row">
			<div class="col-md-12 text-center">
				<p>{{$event_details->event_location}}</p>
				<p>{{$event_details->event_date}}</p>
				<p>{{$event_details->event_time_from}} - {{$event_details->event_time_to}}</p>
			</div>
		</div>
	</div>
</div>
<!-- footer section -->
<nav class="navbar navbar-default">
	<div class="ui-line-pink animated fadeInLeft"></div>
	<div class="container">
		<div class="text-center">
			<p class="ui-footbar-content">&copy &nbsp SCI.NG</p>
		</div>
	</div>
</nav>