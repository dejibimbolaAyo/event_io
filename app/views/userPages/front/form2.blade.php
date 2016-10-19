<!-- this page holds the logis for the second form -->
@extends ('layouts.default.main')
@section('title', 'Event Form | Event Host / Speakers')
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
			@if(isset($slug2)||isset($slug))
			<form action="{{url('/create/event/host')}}" enctype="multipart/form-data" method="post">
				<input type="text" style="display: none;" value="{{$slug}}" name="slug">
				<div class="form-group">
					<label for="Event host">Event Host </label>
					<input name="host_name" type="text" class="form-control" placeholder="Host">
				</div>
				{{-- <div class="form-group">
					<label for="Event host">Event Host 2 </label>
					<input name="host_name[]" type="text" class="form-control" placeholder="Host 2 (if applcable)">
				</div>
				<div class="form-group">
					<label for="Event host">Event Host 3 </label>
					<input name="event_host3" type="text" class="form-control" placeholder="Host 3 (if applcable)">
				</div> --}}
				<div class="form-group">
					<button type="submit" class="btn btn-success pull-right">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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