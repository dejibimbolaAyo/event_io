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
				<form>
					<div class="form-group">
						<label for="email">First Name </label>
						<input type="text" class="form-control" placeholder="Enter First Name">
					</div>
					<div class="form-group">
						<label for="email">Last Name </label>
						<input type="text" class="form-control" placeholder="Enter Last Name">
					</div>
					<div class="form-group">
						<label for="email">Phone Number </label>
						<input type="text" class="form-control" placeholder="Enter Phone Number">
					</div>
					
					<div class="form-group">
						<label for="email">Email </label>
						<input type="email" class="form-control" placeholder="Enter Email">
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
				<form>
					
					<div class="form-group">
						<label for="email">Email </label>
						<input type="email" class="form-control" placeholder="Enter Email">
					</div>
					<div class="form-group">
						<label for="email">Password </label>
						<input type="password" class="form-control" placeholder="Enter Password">
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
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.datetimepicker.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script>
	$( "#datepicker" ).datepicker({inline: true,
		format:'d/m/Y'});


	$('#datetimepicker1').datetimepicker({
	datepicker:false,
	format:'H:i',
	step:5});
</script>