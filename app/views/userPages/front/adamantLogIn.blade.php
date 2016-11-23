@extends ('layouts.default.main')
@section('title', 'Log In | Persistent')
@section('content')
<div class="container" style="margin-top: 80px;">
	<div class="row">
		<div class="hidden-xs col-sm-3 col-md-3"></div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="">
				<h2>Sign In</h2>
			</div>
			<div class="login-container-panel panel">
				<div style="padding: 10%">
					<form>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter Email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter Password">
						</div>
						<div>
							<input type="submit" name="" class="btn btn-success pull-right" value="Log In">
						</div>
					</form>
				</div>
					<div style="padding: 20%">
						<h6>Don't Have an Account yet? Click <a data-toggle="modal" data-target="#signUp">Sign Up</a></h6>
					</div>
			</div>
		</div>
		<div class="hidden-xs col-sm-3 col-md-3	"></div>
	</div>
</div>
@stop