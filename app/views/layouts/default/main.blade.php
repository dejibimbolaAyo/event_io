<!-- this holds the structure for the default views -->
<!DOCTYPE html>
<html>
	<head>
		@include('layouts.default.head')
	</head>
	<body>
		@include('layouts.default.header')
		@yield('content')
		@include('layouts.default.footer')
	</body>
</html>