<!-- form3 page -->
@extends ('layouts.default.main')
@section('title', 'Event Form | Event Images')
@section('content')
<div class="container" style="margin-top: 10vh;">
	<div class="row">
		<div class="hidden-xs hidden-sm col-md-3"></div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<!-- event form goes here -->
			<form action="/">
				<div class="form-group">
					<label for="Event Location (Venue)">Event Logo</label>
					<input type="file" class="form-control dropzone" name="file" placeholder="Enter address for Event (Venue)">
				</div>
				<div class="form-inline">
					<label for="Event Location (Venue)">Event Banner</label>
					<div class="form-group" style="width:100%">
						<input type="file" class="form-control dropzone" style="width:70%">
						<a href="" class="btn btn-info" style="width:29%">Get a Free Banner</a>
					</div>
				</div>
				<br>
				<div class="form-group">
					<button type="submit" class="btn btn-success pull-right">Create Event</button>
				</div>
			</form>
		</div>
		<div class="hidden-xs hidden-sm col-md-3"></div>
	</div>
</div>
@stop