<?php
include('koneksi.php');


?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
	<html lang="en"> --> <!--<![endif]
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">

</head>
<body>

	<!-- Primary Page Layout -->

	<div class="container">
		<div class="form-bg">
			<form action="login_cek.php" method="POST">
				<h2>Login</h2>
				<p><input type="text" name="user" placeholder="Email" required></p>
				<p><input type="password" name="pass" placeholder="Password" required></p>
				<!-- <p> <input type="checkbox"  name="kategori" value="juri">Juri </p> -->
				<label for="kategori">
				  <input type="checkbox" name="kategori" value="juri" checked />
				  <span>Juri</span>
				</label>
				<button type="submit"></button>
			<form>
		</div>

	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>

<!-- End Document -->
</body>
</html>
