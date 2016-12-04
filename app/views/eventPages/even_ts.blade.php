<!-- events page -->
@extends ('layouts.default.main')
@section('title', 'Recent Events')
@section('content')
<div class="container-fluid">
	<div style="height: 10vh;"></div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-md-12 col-xs-12 col-sm-10">
			@foreach ($all_events->chunk(4) as $chunk)
			<div class="row animated fadeInDown" data-columns id="grid">
				@foreach($chunk as $events)
				<div class="col-md-3 col-sm-6 thumbnail event-thumbnail img-responsive ui-grow-shadow">
					@foreach($events->eventImages as $image)
					<img src="{{url($image->event_logo_url)}}" class="event-logo">
					<center class="event-banner-wrapper">
					<img src="{{url($image->event_banner_url)}}" class="event-banner">
					</center>
					@endforeach
					<p>Event Name:
						{{$events->eventDetail['event_name']}}
					</p>
					<p>
						Venue: {{$events->eventDetail['event_venue']}}
					</p>
					Time and Date:
					<span>
						{{$events->eventDetail['event_time_from']}}
						<span> - </span>
						{{$events->eventDetail['event_time_to']}}
					</span>
					@foreach($events->eventHosts as $host)
					<p>
						<span> Host:
							{{$host->host_name}}
						</span>
					</p>
					@endforeach
					<a href="{{URL::route('home')}}{{'/'}}{{$events->slug}}"><button class="btn btn-primary pull-right">View Event</button></a>
				</div>
				@endforeach
			</div>
			@endforeach
		</div>
		<br>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>
@stop