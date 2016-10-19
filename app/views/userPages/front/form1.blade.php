<!-- this page holds the form1 -->
@extends ('layouts.default.main')
@section('title', 'Event Form | Event Details')
@section('content')
<div class="container" style="margin-top: 80px;">
	<div class="row">
		<div class="hidden-xs hidden-sm col-md-3"></div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<!-- event form goes here -->
			<div>
				@if(!Auth::check())
				<div class="alert alert-warning text-center">
					You Will Need To Be Logged In to Create an Active Event
					<br>
					<button class="btn btn-success warn-btn" data-toggle="modal" data-target="#login">Login</button>
					<button class="btn btn-success warn-btn" data-toggle="modal" data-target="#signUp">Sign Up</button>
				</div>
				@endif
			</div>
			<div>
				<div class="animated fadeOut" style="animation-delay: 2s">
					@if(Session::has('message'))
					<div class="row text-center">
						<div class="col-xs-12 alert-container">
							<div class="alert alert-dismissible alert-success col-xs-12" role="alert" style="display:inline-block; border-radius: 30px;">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times</span><span class="sr-only">Close</span></button>
								<div class="text-center">{{ Session::get('message') }}</div>
							</div>
						</div>
					</div>
					@endif
				</div>
				<form action="{{URL::route('storeEventDetails')}}" enctype="multipart/form-data" method="post" >
					@if (isset($user_data))
					<input type="text" style="display: none" name="user_id" value="{{$user_data->id}}">
					@endif
					<div class="form-group @if ($errors->has('event_name')) has-error @endif">
						<label for="event name">Event Name </label>
						<input name="event_name" type="text" class="form-control" placeholder="Enter Event Name">
						@if ($errors->has('event_name')) <p class="help-block">{{ $errors->first('event_name') }}</p> @endif
					</div>
					<div class="form-group @if ($errors->has('event_type_id')) has-error @endif">
						<label for="event name">Event Type </label>
						<select name="event_type_id" class="form-control">
							@foreach($e_types as $e_type)
							<option value="{{$e_type->id}}">{{$e_type->type}}</option>
							@endforeach
						</select>
						@if ($errors->has('event_type_id')) <p class="help-block">{{ $errors->first('event_type_id') }}</p> @endif
					</div>
					<div class="form-group @if ($errors->has('event_date')) has-error @endif">
						<label for="event date">Event Date </label>
						<input name="event_date" type="date" class="form-control" id="datepicker" placeholder="Enter Event Date">
						@if ($errors->has('event_date')) <p class="help-block">{{ $errors->first('event_date') }}</p> @endif
					</div>
					<div class="form-inline">
						<label for="event time">Event Time </label>
						<div class="form-group block" style="width:100%">
							<input name="event_time_from"  id="datetimepicker1" type="text" class="form-control @if ($errors->has('event_time_from')) has-error @endif" placeholder="From" style="width:48%">
							@if ($errors->has('event_time_from')) <p class="help-block">{{ $errors->first('event_time_from') }}</p> @endif
							
							<input name="event_time_to" id="datetimepicker2" type="text" class="form-control @if ($errors->has('event_time_to')) has-error @endif" placeholder="To (if applicable)" style="width:50%">
							@if ($errors->has('event_time_to')) <p class="help-block">{{ $errors->first('event_time_to') }}</p> @endif
						</div>
					</div>
					<br>
					
					<div class="form-group @if($errors->has('event_location')) has-error @endif">
						<label for="Event Location (Venue)">Event Location (Venue)</label>
						<input type="text" name="event_location" class="form-control" placeholder="Enter address for Event (Venue)">
						@if ($errors->has('event_location')) <p class="help-block">{{ $errors->first('event_location') }}</p> @endif
					</div>
					<br>
					
					<div class="form-group @if($errors->has('event_email')) has-error @endif">
						<label for="Event organizer email">Event (Organizers) Email </label>
						<input type="email" name="event_email" class="form-control" placeholder="Enter Event (Organizers) Email">
						@if ($errors->has('event_email')) <p class="help-block">{{ $errors->first('event_email') }}</p> @endif
					</div>
					<div class="form-group @if($errors->has('event_phone')) has-error @endif">
						<label for="Event organizer Phone number">Event (Organizers) Phone </label>
						<input type="text" name="event_phone" class="form-control" placeholder="Enter Event (Organizers) Phone Number">
						@if ($errors->has('event_phone')) <p class="help-block">{{ $errors->first('event_phone') }}</p> @endif
					</div>
					<div class="form-group @if($errors->has('event_description')) has-error @endif">
						<label for="Event description">Event Description</label>
						<textarea type="text" name="event_description" class="form-control" placeholder="Give a detail of the event you are hosting"></textarea>
						@if ($errors->has('event_description')) <p class="help-block">{{ $errors->first('event_description') }}</p> @endif
					</div>
					<div class="form-group @if($errors->has('event_detail')) has-error @endif">
						<label for="Event description">Additional Details</label>
						<textarea type="text" name="event_detail" class="form-control" placeholder="Enter additional details of the event you are hosting"></textarea>
						@if ($errors->has('event_detail')) <p class="help-block">{{ $errors->first('event_detail') }}</p> @endif
					</div>
					<div class="form-group @if($errors->has('event_seats')) has-error @endif">
						<label for="Seat Available">Seats Available</label>
						<input type="number" name="event_seats" min="0" step="1" class="form-control" placeholder="How many seats have you provided (if applicable)">
						@if ($errors->has('event_seats')) <p class="help-block">{{ $errors->first('event_seats') }}</p> @endif
					</div>
					<div class="form-group text-center">
						<h6 class="alert bg-info" style="width:100%">Click on Next to Add Hosts/Speakers your Event.</h6>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success pull-right">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>
				</form>
			</div>
			<div class="hidden-xs hidden-sm col-md-3"></div>
		</div>
	</div>
	@stop