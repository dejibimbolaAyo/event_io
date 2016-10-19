<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		@include('layouts.dashboard.head')
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			@include('layouts.dashboard.header')
			@yield('content')
			@include('layouts.dashboard.footer')
		</div>
	</body>
</html>