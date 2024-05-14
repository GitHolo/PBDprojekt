<?php session_start(); ?>
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
							<h1>Book a table</h1>

							<div class="image main">
								<img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, est. Totam aperiam, atque! Distinctio quo, voluptate asperiores. Delectus sapiente, repellendus esse cupiditate error. Alias veritatis, iusto assumenda eum a sint veniam ab illum voluptas, minima nam aliquid maxime cum, corporis perspiciatis commodi beatae optio? Porro consequuntur modi expedita earum quidem! Vel, tenetur, ex. Quaerat nemo modi architecto harum asperiores hic.</p>
							
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Book a Table</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" placeholder="08.07.2020" />
										</div>

										<div class="field half">
											<input type="text" placeholder="20:00" />
										</div>

										<div class="field half">
											<select>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>

										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Check Availability" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<?php include "./assets/site/fsection.php"; ?>

							
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>