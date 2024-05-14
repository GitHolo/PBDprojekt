<?php session_start();?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Papa's Restaurants</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./images/papas-pizzeria.jpg">
	<script src="https://kit.fontawesome.com/93c44cf550.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

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

		<script src="assets/js/main.js"></script>

	</body>
</html>