@extends ('layouts.default.main')
@section('title', 'Event Form | Event Template')
@section('content')
<div class="container" style="margin-top: 80px; padding-bottom: 20px">
	<button class="btn btn-success pull-right" data-target="#showTemplate" data-toggle="modal">Change Template</button>
	@if(isset($template_id))
	<a href="{{url('template/choose')}}/{{$template_id}}"><button class="btn btn-success pull-left">Choose Template</button></a>
	@else
	<a href="{{url('template/choose/')}}/1"><button class="btn btn-success pull-left">Choose Template</button></a>
	@endif

</div>
<div class="row">
	<div class="hidden-xs col-sm-1 col-md-1"></div>
	<div class="col-xs-12 col-sm-10 col-md-10 template-holder">
		{{-- this portion contains the default template, the change button allows the user to pick another template --}}
		{{-- this will be made dynamic i.e it will bw loaded from storage()database, but for now letfs make the default static--}}
		{{-- template starts --}}
		@if(isset($event_template->template_url))

		@include('eventPages.templates.'.$event_template->template_url)
		@else
		@include('eventPages.templates.default')
		@endif

		{{-- template Ends --}}
	</div>
	<div class="hidden-xs col-sm-1 col-md-1"></div>
</div>
<div id="showTemplate" role="dialog" class="modal fade">
	<div class="modal-dialog2">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #00A65A;">
				<div class="modal-title">
					<h4 style="color: white">Choose Template</h4>
				</div>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						@foreach($templates as $template)
						<div class="col-xs-3 col-sm-3 col-md-2">
							<a href="{{url('template/preview')}}/{{$template->id}}">
								<div class="thumbnail">
								<img src="{{$template->template_url}}" class="img-responsive block">
								<div class="caption">
									{{$template->template_name}}
								</div>
							</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
				<div class="alert alert-info">
					<h5 class="text-center">Choose a Template For your Event</h5>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- <script>
var baseUrl = "{{url('/')}}";
function loadTemplate(template_id){
	var template_detail = $.get(baseUrl + '/template/' + template_id);
	console.log(template_detail);
	}
</script> --}}
@stop