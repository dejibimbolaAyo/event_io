<!-- other pages header aside the homepage -->
<div class="container-fluid" id="header2">
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed header2">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand">
						<img src="{{URL::asset('assets/img/logo.png')}}" class="logo">
						<h3 class="logo2">vents.io</h3>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- @if(Session::has('message'))
<div class="row text-center">
	<div class="col-xs-12 alert-container animated fadeIn" style="margin-top: 70px;">
		<div class="alert alert-dismissible alert-success col-xs-12" role="alert" style="display:inline-block; border-radius: 30px;">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times</span><span class="sr-only">Close</span></button>
			<div class="text-center">{{ Session::pull('message') }}</div>
		</div>
	</div>
</div>
@endif
 -->
<!-- @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif -->