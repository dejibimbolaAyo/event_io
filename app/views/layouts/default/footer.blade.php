<!-- the footer and the foot script -->
<div class="modal fade" role="dialog" id="signUp">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Sign Up</h4>
			</div>
			<div class="modal-body">
				<form enctype="multipart/form-data" action="{{URL::route('storeSignup')}}" method="post">
					<div class="form-group">
						<label for="first_name">First Name </label>
						<input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
					</div>
					<div class="form-group">
						<label for="last_name">Last Name </label>
						<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
					</div>
					
					<div class="form-group">
						<label for="username">Username: </label>
						<input type="text" name="username" class="form-control" placeholder="Enter a username">
					</div>
					<div class="form-group">
						<label for="email">Email </label>
						<input type="email" name="email" class="form-control" placeholder="Enter Email">
					</div>
					<div class="form-group">
						<label for="phone_no">Phone Number </label>
						<input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number">
					</div>
					<div class="form-group">
						<label for="password">Password </label>
						<input type="password" name="password" class="form-control" placeholder="Choose a Password">
					</div>
					<div class="form-group">
						<label for="password">Confirm Password </label>
						<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your Password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Sign Up</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" role="dialog" id="login">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">
				<form enctype="multipart/form-data" method="post" action="{{URL::route('login')}}">
					
					<div class="form-group">
						<label for="email">Email </label>
						<input type="email" name="email" class="form-control" placeholder="Enter Email">
					</div>
					<div class="form-group">
						<label for="email">Password </label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Login</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>
<div class="navbar navbar-default navbar-fixed-bottom footer">
	<center style="padding-top:10px">&copy &nbsp ROBOTIC LLC. </center>
</div>
{{HTML::script('assets/js/jquery.js')}}
{{HTML::script('assets/js/jquery-ui.min.js')}}
{{HTML::script('assets/js/jquery.datetimepicker.js')}}
{{HTML::script('assets/js/bootstrap.min.js')}}
{{HTML::script('assets/js/salvattore.js')}}
{{HTML::script('assets/js/flipclock/flipclock.min.js')}}
@if(isset($event_details))
<script type="text/javascript">
var clock;

			$(document).ready(function() {

				// Instantiate a counter
				clock = new FlipClock($('.seat'), {{$event_details->event_seats}}, {
					clockFace: 'Counter'
				});

				// Attach a click event to a button a increment the clock
				$('.increment').click(function() {
					//clock.setValue(10);

					// Or you could decrease the clock
					// clock.decrement();

					clock.increment();

					// Or set it to a specific value
					// clock.setValue(x);
				});

				// Attach a click event to a button a decrement the clock
				$('.decrement').click(function() {
					clock.decrement();
				});

				$('.reset').click(function() {
					clock.reset();
				});

			});
		</script>
<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			var clock;
			clock = $('.countdown').FlipClock({
		clockFace: 'DailyCounter',
		autoStart: false,
		callbacks: {
			stop: function() {
				$('.message').html('The clock has stopped!')
			}
		}
		});
				
		clock.setTime({{$event_countdown}});
		clock.setCountdown(true);
		clock.start();
		});
</script>
@endif
<script>
	$( "#datepicker" ).datepicker({inline: true,
		format:'d/m/Y'});
	$('#datetimepicker1').datetimepicker({
	datepicker:false,
	format:'H:i',
	step:5});
</script>