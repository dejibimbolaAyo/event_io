<!-- form3 page -->
@extends ('layouts.default.main')
@section('title', 'Event Form | Event Images')
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
			<div class="animated fadeOut" style="animation-delay: 2s; position: absolute; top: 12vh">
				@if(Session::has('message'))
				<div class="row text-center">
					<div class="col-xs-12 alert-container">
						<div class="alert alert-dismissible alert-success col-xs-12" role="alert" style="display:inline-block; border-radius: 30px;">
							<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times</span><span class="sr-only">Close</span></button>
							<div class="text-center">{{ Session::pull('message') }}</div>
						</div>
					</div>
				</div>
				@endif
			</div>
			@if(isset($slug2)||isset($slug3)||isset($slug))
			<form action="{{url('/create/event/images')}}" enctype="multipart/form-data" method="post">
				<input type="text" style="display: none;" value="{{$slug}}" name="slug">
				<div class="form-group">
					<label for="Event Logo (Venue)">Event Logo</label>
					<input type="file" class="form-control" name="event_logo" placeholder="Enter address for Event (Venue)">
				</div>
				<div class="form-inline">
					<label for="Event Banner (Venue)">Event Banner</label>
					<div class="form-group" style="width:100%">
						<input type="file" name="event_banner" class="form-control" style="width:70%">
						<a href="" class="btn btn-info" style="width:29%">Get a Free Banner</a>
					</div>
				</div>
				<br>
				<div class="form-group">
					<button type="submit" class="btn btn-success pull-right">Create Event</button>
				</div>
			</form>
			@else
			<div class="alert alert-info text-center">you seemed lost go to the <a href="{{url('/')}}">HOME PAGE</a> TO create an Event</div>
			@endif
		</div>
		<div class="hidden-xs hidden-sm col-md-3"></div>
	</div>
</div>
@stop