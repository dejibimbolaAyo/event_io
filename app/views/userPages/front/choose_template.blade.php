@extends ('layouts.default.main')
@section('title', 'Event Form | Event Template')
@section('content')
<div class="container" style="margin-top: 80px;">
	<div class="row">
		<div class="hidden-xs col-sm-2 col-md-3"></div>
		<div class="col-xs-12 col-sm-8 col-md-6">
			{{-- this is the template holder --}}
			@foreach($templates as $template)
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="thumbnail" data-target="#showTemplate" data-toggle="modal" value="{{$template->id}}" onclick="loadTemplate(this.value)">
					<img src="{{$template->template_url}}" class="img-responsive block">
					<div class="caption">
						{{$template->template_name}}
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="hidden-xs col-sm-2 col-md-3"></div>
	</div>
</div>
{{-- find a means of getting value from each templates, use this.Value to return an id, so the id would = {{template->id}} this takes the template id from the template table --}}
<div id="showTemplate" role="dialog" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="pull-right">
					<a href=""><button class="btn btn-success">Choose Template</button></a>
				</div>
				<div class="modal-title">
					<h4>Choose {{$template->template_name}} Template</h4>
				</div>
			</div>
			<div class="modal-body">
				{{-- here a query of the database is done to fetch location of the template in assets, or clicking on the thumbnail should load the template into a modal view??? --}}
			</div>
		</div>
	</div>
</div>
<script>
var baseUrl = "{{url('/')}}";
function loadTemplate(template_id){
	var template_detail = $.get(baseUrl + '/template/' + template_id);
	console.log(template_detail);
}	
</script>
@stop