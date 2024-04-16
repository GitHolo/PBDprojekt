<?php session_start();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PHPJabbers.com | Free Restaurant Website Template</title>
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
								<a href="index.php" class="logo">
									<span class="fa fa-cutlery"></span> <span class="title">Restaurant Website</span>
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
							<h1>Menu</h1>

							<div class="image main">
								<img src="images/banner-image-5-1920x500.jpg" class="img-fluid" alt="" />
							</div>

							<!-- Vacations -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/product-1-720x480.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$11.00</del> <strong> $9.95</strong></p>

										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, aspernatur?
		                                </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/product-2-720x480.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$11.00</del> <strong> $9.95</strong></p>

										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, ea.
		                                </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/product-3-720x480.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$11.00</del> <strong> $9.95</strong></p>

										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, qui.
		                                </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/product-4-720x480.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$11.00</del> <strong> $9.95</strong></p>

										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, non!
		                                </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/product-5-720x480.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$11.00</del> <strong> $9.95</strong></p>

										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, nam.
		                                </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/product-6-720x480.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>
										
										<p><del>$11.00</del> <strong> $9.95</strong></p>

										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quod.
		                                </p>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
				<?php include "./assets/site/footer.php";?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>