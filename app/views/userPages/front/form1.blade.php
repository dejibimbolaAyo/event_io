<!-- this page holds the form1 -->
@extends ('layouts.default.main')
@section('title', 'Event Form | Event Details')
@section('content')

<div class="container" style="margin-top: 10vh;">
	<div class="row">
		<div class="hidden-xs hidden-sm col-md-3"></div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<!-- event form goes here -->
			<form action="{{}}" >
				<div class="form-group">
					<label for="event name">Event Name </label>
					<input name="event_name" type="text" class="form-control" placeholder="Enter Event Name">
				</div>
				<div class="form-group">
					<label for="event name">Event Type </label>
					<select name="event_type" class="form-control">
						<option></option>
					</select>
				</div>
				<div class="form-group">
					<label for="event date">Event Date </label>
					<input name="event_date" type="date" class="form-control" id="datepicker" placeholder="Enter Event Date">
				</div>
				<div class="form-inline">
					<label for="event time">Event Time </label>
					<div class="form-group block" style="width:100%">
						<input name="event_time_from"  id="datetimepicker1" type="text" class="form-control" placeholder="From" style="width:49.2%">
						<input name="event_time_to" id="datetimepicker2" type="text" class="form-control" placeholder="To (if applicable)" style="width:50%">
					</div>
				</div>
				<br>
				
				<div class="form-group">
					<label for="Event Location (Venue)">Event Location (Venue)</label>
					<input type="text" class="form-control" placeholder="Enter address for Event (Venue)">
				</div>
				<br>
				
				<div class="form-group">
					<label for="Event organizer email">Event / Organizers Email </label>
					<input type="email" class="form-control" placeholder="Enter Event (Organizers) Email">
				</div>
				<div class="form-group">
					<label for="Event organizer Phone number">Event / Organizers Phone </label>
					<input type="text" class="form-control" placeholder="Enter Event (Organizers) Email">
				</div>
				<div class="form-group">
					<label for="Event description">Event Description</label>
					<textarea type="text" class="form-control" placeholder="Give a detail of the event you are hosting"></textarea>
				</div>
				<div class="form-group">
					<label for="Event description">Additional Details</label>
					<textarea type="text" class="form-control" placeholder="Enter additional details of the event you are hosting"></textarea>
				</div>
				<div class="form-group">
					<label for="Event description">Seats Available</label>
					<input type="number" min="0" step="1" class="form-control" placeholder="How many seats have you provided (if applicable)">
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
