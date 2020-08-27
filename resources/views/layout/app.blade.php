<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Payments Buttons')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
	@yield('css')
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<!--Scripts Files--> 
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	@yield('js')
</body>
</html>