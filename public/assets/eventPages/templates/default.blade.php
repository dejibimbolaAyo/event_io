<nav class="navbar navbar-default ui-navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<div class="navbar-brand animated fadeInLeft">
						<a href="/webUI2"><img class="logo" src="http://localhost:8000{{$event_imgs->event_logo_url}}"></a>
						{{$event_details->event_name}}
					</div>
				</div>
			</div>
		</nav>
		<div class="ui-line-pink animated fadeInRight"></div>
		<div class="container">
			<!-- row for slider -->
			<div class="row animated fadeInUp">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" effect="slide">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="http://localhost:8000{{$event_imgs->event_banner_url}}" class="img-responsive">
						</div>
					</div>
					<!-- Controls -->
					{{-- 	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a> --}}
				</div>
			</div>
			<div class="row" style="padding-top: 20px">
				<div class="col-xs-12 col-sm-12 col-md-4 animated fadeInLeft">
					<div class="panel pad-top">
						<div class="panel panel-title ui-panel-heading1">
							<p>Event Description</p>
						</div>
						<div class="panel panel-body ui-panel-body">
							<img src="img/designs/td2.jpg" class="img-responsive">
							<h5>
							{{$event_details->event_description}}
							</h5>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 animated fadeInUp">
					<div class="panel pad-top">
						<div class="panel panel-title ui-panel-heading2">
							<p>Event Details</p>
						</div>
						<div class="panel panel-body ui-panel-body">
							<img src="img/designs/td4.jpg" class="img-responsive">
							<h5>
							{{$event_details->event_detail}}
							</h5>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 animated fadeInRight">
					<div class="panel pad-top">
						<div class="panel panel-title ui-panel-heading1">
							<p>Event Venue</p>
						</div>
						<div class="panel panel-body ui-panel-body">
							<img src="img/designs/td3.jpg" class="img-responsive">
							<h5>
							{{$event_details->event_location}}
							</h5>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>{{$event_details->event_location}}</p>
						<p>{{$event_details->event_date}}</p>
						<p>{{$event_details->event_time_from}} - {{$event_details->event_time_to}}</p>
					</div>
				</div>
			</div>
		</div>
		<!-- footer section -->
		<nav class="navbar navbar-default">
			<div class="ui-line-pink animated fadeInLeft"></div>
			<div class="container">
				<div class="text-center">
					<p class="ui-footbar-content">&copy &nbsp SCI.NG</p>
				</div>
			</div>
		</nav>