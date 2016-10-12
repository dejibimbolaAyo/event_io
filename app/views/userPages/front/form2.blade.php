<!-- this page holds the logis for the second form -->
@extends ('layouts.default.main')
@section('title', 'Event Form | Event Host / Speakers')
@section('content')
<div class="container" style="margin-top: 10vh;">
	<div class="row">
		<div class="hidden-xs hidden-sm col-md-3"></div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<!-- event form goes here -->
			<form action="/">
				<div class="form-group">
					<label for="Event host">Event Host </label>
					<input name="event_host1" type="text" class="form-control" placeholder="Host">
				</div>
				<div class="form-group">
					<label for="Event host">Event Host 2 </label>
					<input name="event_host2" type="text" class="form-control" placeholder="Host 2 (if applcable)">
				</div>
				<div class="form-group">
					<label for="Event host">Event Host 3 </label>
					<input name="event_host3" type="text" class="form-control" placeholder="Host 3 (if applcable)">
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