<?php
session_start();
if (isset ($_GET["previous"]) && !empty($_GET["previous"])){
	$location=$_GET["previous"];
	$url_full= "?previous=". $location;
}
else {
	$location="/";
	$url_full="/";
}
?>
<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>HBSS | Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Welcome to HBSS</h1>
				<p>Do some cool shit with your account and watch some stuff at the same time! <p><a href="hummingbird.me">Humingbird.me</a>.</p>
			</header>

		<!-- Signup Form -->
			<form action="../core/signup_handler.php<?php echo $url_full;?>" id="signup-form" method="post">
				<input type="text" name="name" id="email" placeholder="Hummingbird Username" />
				<input type="submit" value="Continue" />
			</form>






		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; HBSS.</li><li>Credits: <a href="https://hbss.dev/">HBSS</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>