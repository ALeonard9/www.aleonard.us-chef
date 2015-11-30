<?php

session_start();

echo "<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name='description' content='PostersASAP.com'>
	<meta name='author' content='LeonineStudios@outlook.com'>

	<title>LeoNine Studios</title>

	<!-- Bootstrap core CSS -->
	<link href='./css/bootstrap.min.css' rel='stylesheet'>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href='./css/ie10-viewport-bug-workaround.css' rel='stylesheet'>

	<!-- Custom styles for this template -->
	<link href='./css/leo.css' rel='stylesheet'>

	<!-- Icons for mobile -->
	<link rel='apple-touch-icon' sizes='57x57' href='./apple-icon-57x57.png'>
	<link rel='apple-touch-icon' sizes='60x60' href='./apple-icon-60x60.png'>
	<link rel='apple-touch-icon' sizes='72x72' href='./apple-icon-72x72.png'>
	<link rel='apple-touch-icon' sizes='76x76' href='./apple-icon-76x76.png'>
	<link rel='apple-touch-icon' sizes='114x114' href='./apple-icon-114x114.png'>
	<link rel='apple-touch-icon' sizes='120x120' href='./apple-icon-120x120.png'>
	<link rel='apple-touch-icon' sizes='144x144' href='./apple-icon-144x144.png'>
	<link rel='apple-touch-icon' sizes='152x152' href='./apple-icon-152x152.png'>
	<link rel='apple-touch-icon' sizes='180x180' href='./apple-icon-180x180.png'>
	<link rel='icon' type='image/png' sizes='192x192'  href='./android-icon-192x192.png'>
	<link rel='icon' type='image/png' sizes='32x32' href='./favicon-32x32.png'>
	<link rel='icon' type='image/png' sizes='96x96' href='./favicon-96x96.png'>
	<link rel='icon' type='image/png' sizes='16x16' href='./favicon-16x16.png'>
	<meta name='apple-mobile-web-app-title' content='Leonine'>
	<link rel='manifest' href='./manifest.json'>
	<meta name='msapplication-TileColor' content='#ffffff'>
	<meta name='msapplication-TileImage' content='./ms-icon-144x144.png'>

</head>
<body>
		<div class='container'>

			<!-- Static navbar -->
			<nav class='navbar navbar-default'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
							<span class='sr-only'>Toggle navigation</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
						<a class='navbar-brand' href='index.php'>LeoNineStudios</a>
					</div>
					<div id='navbar' class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>
							<li><a href='index.php'>Dashboard</a></li>
							<li class='dropdown'>
	              <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Apps <span class='caret'></span></a>
	              <ul class='dropdown-menu'>
	                <li><a href='bet/betting.php'>Betting</a></li>
	              	<li><a href='smash/smash.php'>Smash Up</a></li>
								</ul>
	            </li>
							<li class='dropdown'>
								<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Trackers <span class='caret'></span></a>
								<ul class='dropdown-menu'>
									<li><a href='movies/movie.php'>Movies</a></li>
									<li><a href='#'>Travel</a></li>
									<li><a href='#'>TV</a></li>
									<li><a href='videogame/videogame.php'>Video Games</a></li>
								</ul>
							</li>
						</ul>
						<ul class='nav navbar-nav navbar-right'>";
						if ($_SESSION['username'])
						{
						echo "<li><a href='./logout.php'>Log Out</a></li>";
						}
						else
						{
						echo "<li><a href='./signin.html'>Sign In</a></li>";
						}

echo "</ul>
					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</nav>
	</div>

	<!--================================================== -->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
	<script>window.jQuery || document.write(\"<script src='./js/vendor/jquery.min.js'><\/script>\")</script>
	<script src='./js/bootstrap.min.js'></script>
	<script src='./js/ie10-viewport-bug-workaround.js'></script>
</body>
</html>";

?>