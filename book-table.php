<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Papa's Restaurants</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="fa fa-cutlery"></span> <span class="title">Papa's Restaurants</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

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
							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
									<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
									<li><span class="fa fa-mobile"></span> +1 333 4040 5566 </li>
									<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
								</ul>
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
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