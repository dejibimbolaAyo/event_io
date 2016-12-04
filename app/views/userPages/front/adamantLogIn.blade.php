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
			<div class="login-container-panel panel">
				<div style="padding: 10%">
					<form enctype="multipart/form-data" method="post" action="{{URL::route('login')}}">
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