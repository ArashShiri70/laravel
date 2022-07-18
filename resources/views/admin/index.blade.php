<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Test Project</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ URL::asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container">
			<a>
				<b>{{Auth::user()->name}}</b> welcome to your panel
			</a>
		</div>
	</nav>
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">	
			
		</div>
	</div>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{ URL::asset('js/materialize.js') }}"></script>
	<script src="{{ URL::asset('js/init.js') }}"></script>
</body>
</html>
