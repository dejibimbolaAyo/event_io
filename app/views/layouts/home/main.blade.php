<html>
	<head>
		<title>@yield('title', 'Home | Welcome')</title>
		@include('layouts.default.head')
	</head>
	<body>
		@include('layouts.home.header')
		@include('layouts.default.footer')
	</body>
</html>