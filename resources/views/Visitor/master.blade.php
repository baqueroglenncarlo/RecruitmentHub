<!DOCTYPE html>
<html>
<head>
	<title>Recruitment Hub</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/handler.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
</head>
<body>

	@include('Navigation.nav')
	@include('Modals.login')
	@include('Modals.registration')
	<br>
	<br>
	<main role="main">
		@include('Layouts.cover')
	</main>

	<hr>

	@include('Navigation.footer')
	
	<script type="text/javascript" src="{{asset('js/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/prevent-number-input.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/auto-uppercase.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/radio-button-checked-event.js')}}"></script>
</body>
</html>