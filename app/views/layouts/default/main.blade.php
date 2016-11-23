<!-- this holds the structure for the default views -->
<!DOCTYPE html>
<html>
	<head>
		@include('layouts.default.head')
	</head>
	<body>
		@include('layouts.default.header')
		<div style="margin-bottom: 40px" ">
		@yield('content')
		</div>
		@include('layouts.default.footer')
	</body>
</html>