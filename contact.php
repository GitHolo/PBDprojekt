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
					<div id="main">
						<div class="inner">
							<h1>Contact Us</h1>
							<span class="image main"><img src="images/map.jpg" alt="" /></span>
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
						</div>
					</div>

				<!-- Footer -->
				<?php include "./assets/site/footer.php";?>

			</div>

		<!-- Scripts -->
		<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/main.js"></script>

	</body>
</html>