<?php
include('koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">

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
				<label for="kategori">
				  <input type="checkbox" name="kategori" value="juri" checked />
				  <span>Juri</span>
				</label>
				<button type="submit"></button>
				<?php
				if (isset($_GET['pesan'])) {
					?>
					<p style="color:red;text-align:center"> <?= $_GET['pesan'] ?> </p>
					<?php
				}
				 ?>
			</form>
		</div>

	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>

<!-- End Document -->
</body>
</html>
