<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php" class="active">Home</a></li>
                            <li><a href='login.php'>
                            <?php if (isset($_SESSION['user_ID'])){
                                echo "Profile";
                            }else{
                                echo "Login";
                            }?>
                            </a></li>

							<li><a href="book-table.php">Book a Table</a></li>

							<li><a href="menu.php">Menu</a></li>

							<li>
								<a href="#" class="dropdown-toggle">About</a>

								<ul>
									<li><a href="about.html">About Us</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="testimonials.html">Testimonials</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
