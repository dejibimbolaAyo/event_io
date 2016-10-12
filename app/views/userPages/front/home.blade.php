<!-- this page hold the view for the home page -->
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/glyphicons.halflings.ttf">
		<link rel="stylesheet" type="text/css" href="assets/css/event.css">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="navbar-wrapper">
				<div>
					<img src="assets/img/party1.jpg"  class="bg-img">
				</div>
				<div class="navbar navbar-inverse navbar-fixed header1">
					<div class="container">
						<div class="navbar-header">
							<a class="navbar-brand">
								<img src="assets/img/logo.png" class="logo">
								<h3 class="logo2">vents</h3>
							</a>
						</div>
						<div class="navbar-right hidden-xs">
							<!-- <button class="btn btn-successs btn-lg navbar-btn start-btn">Create Events Now</button> -->
							<button class="btn btn-success nav-btn" data-toggle="modal" data-target="#login">Login</button>
							<button class="btn btn-success nav-btn" data-toggle="modal" data-target="#signUp">Sign Up</button>
						</div>
						<div class="text-center hidden-sm hidden-md hidden-lg" style="padding-top: 5vh">
							<!-- <button class="btn btn-successs btn-lg navbar-btn start-btn">Create Events Now</button> -->
							<button class="btn btn-success nav-btn" data-toggle="modal" data-target="#login">Login</button>
							<button class="btn btn-success nav-btn" data-toggle="modal" data-target="#signUp">Sign Up</button>
						</div>
					</div>
					<div class="desc text-center">Showcase Your Event to the World!</div>
					<div class="text-center">
						<button class="btn btn-success start-btn">Create Event Now</button>
					</div>
				</div>
				
			</div>
		</div>
		<!--  -->
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
	</div>
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<center style="padding-top:10px">&copy &nbsp ROBOTIC LLC. </center>
	</div>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>