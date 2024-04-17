<?php session_start();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Papa's Restaurants</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="./images/papas-pizzeria.jpg">
		<script src="assets/js/jquery.min.js"></script>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<?php include "./assets/site/mheader.html";?>


				<!-- Menu -->
				<?php include "./assets/site/menu.php";?>

				<!-- Main -->
				<?php include "./assets/site/main.php";?>


				<!-- Footer -->
					<?php include "./assets/site/footer.php";?>

			</div>

		<!-- Scripts -->
		<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>