<?php
session_start();
if (isset($_SESSION["email"])) {
	$mainEmail = $_SESSION["email"];
} else {
	header("Location: signup.php");
}
include_once "./config/db.php";
if (isset($_POST["Submit"])) {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	if ($city == "Select City") {
?>
		<script>
			alert("Please select a city!");
		</script>
	<?php
	}
	$pincode = $_POST["pincode"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	if (isset($_POST["dog"]))
		$dog = $_POST["dog"];
	else
		$dog = null;

	if (isset($_POST["cat"]))
		$cat = $_POST["cat"];
	else
		$cat = null;

	if ($dog == null && $cat == null) {
	?>
		<script>
			alert("Please select atleast one option: cat or dog!");
		</script>
		<?php
	}
	if ($dog == null)
		$dog = 0;
	else
		$dog = 1;
	if ($cat == null)
		$cat = 0;
	else
		$cat = 1;

	$breed = $_POST["breed"];
	$message = $_POST["message"];

	$userIdQuery = $conn->query("SELECT `id` FROM `users` WHERE email='$mainEmail'");

	if ($userIdQuery->num_rows > 0) {
		while ($row = $userIdQuery->fetch_assoc()) {
			$userId = $row["id"];
		}

		$addUser = $conn->query("INSERT INTO `request` VALUES (NULL, $userId, '$fname','$lname','$address','$city','$pincode','$email',$phone,$dog,$cat,'$breed','$message')");
		if ($addUser) {
		?>
			<script>
				alert("Request Success!");
			</script>
		<?php
		} else {
		?>
			<script>
				alert("error");
			</script>
		<?php
		}
	} else {
		?>
		<script>
			alert("Error 2");
		</script>
<?php
	}
}

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Animal Shelter</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<header id="header" id="home">
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.php">Home</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="cats.html">Cats</a></li>
						<li><a href="dogs.html">Dogs</a></li>
						<li><a href="volunteer.html">Volunteer</a></li>
						<!-- <li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li> -->
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Adopt a Pet
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span>Adoption Form</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Volunteer-form Area -->
	<section class="Volunteer-form-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-9">
					<div class="title text-center">
						<h1 class="mb-20">Want to make your life more fulfilling? Adopt a Pet.</h1>
						<p>Adopting a pet has many benefits, some of which you may have not considered. By adopting from a shelter, you are providing an animal with the second chance they deserve. Various studies have shown that a having pet can elongate your life, whilst improving your overall happiness and health. It also helps people with depression, stress, anxiety and many other ailments. The affectionate and loyal nature of dogs and cats as pack animals that form close relationships with their owners can help sufferers of depression, who may feel like they don’t have anybody else.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<form class="col-lg-9" method="POST">
					<div class="form-group">
						<label for="first-name">First Name</label>
						<input type="text" class="form-control" placeholder="First Name" required="" name="fname">
					</div>
					<div class="form-group">
						<label for="last-name">Last Name</label>
						<input type="text" class="form-control" placeholder="Last Name" required="" name="lname">
					</div>
					<div class="form-group">
						<label for="Address">Address</label>
						<input type="text" class="form-control mb-20" placeholder="Your Address" required="" name="address">
					</div>
					<div class="form-row">
						<div class="col-6 mb-30">
							<label for="City">City</label>
							<div class="select-option" id="service-select"">
									<select name=" city">
								<option data-display=" Select City">Select City</option>
								<option value="Kolkata">Kolkata</option>
								<option value="Bangalore">Bangalore</option>
								<option value="Chennai">Chennai</option>
								<option value="Mumbai">Mumbai</option>
								<option value="Mumbai">Delhi</option>
								</select>
							</div>
						</div>
						<div class="col-6 mb-30">
							<label for="postal-code">Postal code</label>
							<input type="text" class="form-control" placeholder="Postal Code" required="" name="pincode">
						</div>
						<div class="col-6 mb-30">
							<label for="email">Email Address</label>
							<input type="email" class="form-control" placeholder="Email Address" required="" name="email">
						</div>
						<div class="col-6 mb-30">
							<label for="phone">Phone Number</label>
							<input type="phone" class="form-control" placeholder="Phone Number" required="" name="phone">
						</div>
					</div>

					<fieldset class="form-group">
						<label for="day">Which pet you want to adopt ?</label>
						<div class="form-group ">
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="dog" id="inlineRadio1" value="dog"> Dog
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="cat" id="inlineRadio2" value="cat"> Cat
								</label>
							</div>
						</div>
					</fieldset>
					<div class="col-6 mb-30">
						<label for="breed">Enter the Breed You Want</label>
						<input type="text" class="form-control" id="breed" placeholder="Breed" required="" name="breed">
					</div>
					<div class="form-group">
						<label for="note">Reason you want to adopt and if you have any special Request</label>
						<textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Write message" name="message"></textarea>
					</div>
					<input type="submit" class="primary-btn float-right" name="Submit" value="Send Request"></input>
				</form>
			</div>
		</div>
	</section>
	<!-- End Volunteer-form Area -->

	<!-- start footer Area -->
	<footer class="footer-area">
		<div class="container">
			<div class="row pt-120 pb-80">
				<div class="col-lg-4 col-md-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							We use the power of the Internet to connect adopters with shelter pets and help pets go from alone to adopted. We're working to help the good people at shelters and rescue groups find homes for their pets. But we don't stop there. We also provide useful and informative information on the human/companion animal relationship to help keep pets healthy and permanently in their loving homes.

						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-footer-widget">
						<h6>Useful Links</h6>
						<div class="row">
							<ul class="col footer-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="adopt.php">Adopt</a></li>
								<li><a href="about.html">About</a></li>
							</ul>
							<ul class="col footer-nav">
								<li><a href="volunteer.html">Volunteer</a></li>
								<!-- <li><a href="blog-home.html">Blog</a></li> -->
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4  col-md-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Contact Us</h6>
						<ul class="list-contact">
							<li class="flex-row d-flex">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="detail">
									<h4>Kolkata, India</h4>
									<p>
										249, BD block Saltlake 
									</p>
								</div>
							</li>
							<li class="flex-row d-flex">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="detail">
									<h4>+91 79802 08525</h4>
									<p>
										Mon to Fri 9am to 6 pm
									</p>
								</div>
							</li>
							<li class="flex-row d-flex">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="detail">
									<h4>support@petshelter.org</h4>
									<p>
										Send us your query anytime!
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-text">
			<div class="container">
				<div class="row footer-bottom d-flex justify-content-between">
					<p class="col-lg-8 col-sm-6 footer-text m-0 text-white">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
					<div class="col-lg-4 col-sm-6 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>