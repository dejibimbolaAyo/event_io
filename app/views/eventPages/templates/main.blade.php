<!DOCTYPE html>
<html>
	<head>
		<title>{{$event_details->event_name}}</title>
		{{HTML::style('assets/css/bootstrap.min.css')}}
		{{HTML::style('assets/fonts/glyphicons.halflings.ttf')}}
		{{HTML::style('assets/css/event.css')}}
		{{HTML::style('assets/css/animate.css')}}
		{{HTML::style('assets/css/flipclock.css')}}
		{{HTML::style('assets/css/jquery-ui.min.css')}}
		{{HTML::style('assets/css/jquery.datetimepicker.css')}}
	</head>
	<body>
		@if(Session::has('message'))
		<div class="row text-center">
			<div class="col-xs-12 alert-container animated fadeIn" style="margin-top: 70px;">
				<div class="alert alert-dismissible alert-success col-xs-12" role="alert" style="display:inline-block; border-radius: 30px;">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times</span><span class="sr-only">Close</span></button>
					<div class="text-center">{{ Session::pull('message') }}</div>
				</div>
			</div>
		</div>
		@endif
		@include('eventPages.templates.'.$event_template->template_url)
		{{HTML::script('assets/js/jquery.js')}}
		{{HTML::script('assets/js/jquery-ui.min.js')}}
		{{HTML::script('assets/js/jquery.datetimepicker.js')}}
		{{HTML::script('assets/js/flipclock.min.js')}}
		{{HTML::script('assets/js/bootstrap.min.js')}}
		{{-- {{"12/28/2002 - %V,%G,%Y = " .strtotime("10/25/2016") . "\n"}} --}}
		<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			var clock;
			clock = $('.countdown').FlipClock({
		clockFace: 'DailyCounter',
		autoStart: false,
		callbacks: {
			stop: function() {
				$('.countdown_message').html('<h2>The Countdown has stopped!</h2>')
			}
		}
		});
				
		clock.setTime({{$event_countdown}});
		clock.setCountdown(true);
		clock.start();
		});
		</script>
		<script type="text/javascript">
			var clock;
				$(document).ready(function() {
				// Instantiate a counter
					clock = new FlipClock($('.seat'), {{$event_details->event_seats}}, {
						clockFace: 'Counter',
						callbacks: {
							stop: function() {
							$('.seat_message').html('<h2>Seats Filled Up!</h2>')
				}
			}
			});
		});
		</script>
	</body>
</html>