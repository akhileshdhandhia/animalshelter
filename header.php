<header id="header" id="home">
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="cats.php">Cats</a></li>
						<li><a href="dogs.php">Dogs</a></li>
						<li><a href="volunteer.php">Volunteer</a></li>
						<!-- <li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li> -->
						<li><a href="contact.php">Contact</a></li>
						<?php
						if ($mainEmail == false) {
						?>
							<li><a href="signup.php">Sign Up/Login</a></li>
						<?php

						} else { ?>
							<li><a href="logout.php">Logout</a></li>
						<?php
						}
						?>

					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->