@extends ('layouts.default.main')
@section('title', 'Sign Up| Persistent')
@section('content')
<div class="container" style="margin-top: 80px;">
	<div class="row">
		<div class="hidden-xs col-sm-2 col-md-2"></div>
		<div class="col-xs-12 col-sm-8 col-md-8">
			<div class="">
				<h2>Quick Sign Up</h2>
			</div>
			<div class="panel">
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
						<div class="form-group">
							<label for="password">Confirm Password</label>
							<input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter Password">
						</div>
						<div>
							<input type="submit" name="" class="btn btn-success pull-right" value="Sign Up">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="hidden-xs col-sm-2 col-md-2	"></div>
	</div>
</div>
@stop