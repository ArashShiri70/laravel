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
			<a id="logo-container" href="#" class="brand-logo">Test Project</a>
		</div>
	</nav>
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<form method="post" action="">
				<div class="row">
					<div class="input-field col s6">
						<input type="text" name="user_name" id="user_name">
						<label for="user_name">user name</label>
					</div>
					<div class="input-field col s6">
						<input type="password" name="password" id="password">
						<label for="password">password</label>
					</div>
				</div>
				<button class="btn">
					signin
				</button>
				<button class="btn">
					signup
				</button>
			</form>

		</div>
	</div>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{ URL::asset('js/materialize.js') }}"></script>
	<script src="{{ URL::asset('js/init.js') }}"></script>

</body>
</html>
