<?php
session_start();
if (isset($_SESSION["email"])) {
	$mainEmail = $_SESSION["email"];
} else {
	$mainEmail = false;
}
include_once "./config/db.php";
?>
<?php
function showAlert($message)
{
?>
	<script>
		var message = '<?php echo $message; ?>';
		alert(message);
	</script>
<?php
}
if (isset($_POST["submit"])) {
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$country = $_POST["country"];
	$postalcode = $_POST["postalcode"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$note = $_POST["note"];
	$daya = 0;
	if (isset($_POST["daya"])) $daya = 1;
	$dayb = 0;
	if (isset($_POST["dayb"])) $dayb = 1;
	$dayc = 0;
	if (isset($_POST["dayc"])) $dayc = 1;
	$dayd = 0;
	if (isset($_POST["dayd"])) $dayd = 1;
	$daye = 0;
	if (isset($_POST["daye"])) $daye = 1;
	$dayf = 0;
	if (isset($_POST["dayf"])) $dayf = 1;
	$dayg = 0;
	if (isset($_POST["dayg"])) $dayg = 1;

	$week = array($daya, $dayb, $dayc, $dayd, $daye, $dayf, $dayg);
	$week = json_encode($week);
	$addContact = $conn->query("INSERT INTO `volunteer` VALUES (NULL, '$firstName','$lastName','$address','$city','$state','$country',$postalcode,'$email',$phone,'$note','$week');");
	if ($addContact) {
		showAlert("Thank you for registering. We will contact you for further events.");
	} else {
		showAlert("Request not submitted");
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
	<?php include("./header.php"); ?>

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Become a Volunteer
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="volunteer.html"> Become a Volunteer</a></p>
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
						<h1 class="mb-20">Want to help? Become a Volunteer</h1>
						<p>Being an animal shelter volunteer is good for your emotional, physical, and mental health. It is scientifically proven that spending time with animals helps lower your stress levels and blood pressure. It will also keep you active, especially if you prefer to walk dogs. You get to create a unique bond with the animals, which helps your emotional health.
							Caring for pets can help you deal with depression, anxiety, and stress.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<form class="col-lg-9" method="POST">
					<div class="form-group">
						<label for="first-name">First Name</label>
						<input type="text" class="form-control" placeholder="First Name" name="firstName" required>
					</div>
					<div class="form-group">
						<label for="last-name">Last Name</label>
						<input type="text" class="form-control" placeholder="Last Name" name="lastName" required>
					</div>
					<div class="form-group">
						<label for="Address">Address</label>
						<input type="text" class="form-control mb-20" placeholder="Your Address" name="address" required>
					</div>

					<div class="form-row">
						<div class="col-6 mb-30">
							<label for="City">City</label>
							<div class="select-option" id="service-select"">
									<select name=" city">
								<option data-display=" Select City">Select City</option>
								<option value="1">Dhaka</option>
								<option value="2">Dinajpur</option>
								<option value="3">Gazipur</option>
								<option value="4">Bogra</option>
								<option value="5">Feni</option>
								</select>
							</div>
						</div>
						<div class="col-6 mb-30">
							<label for="state">State</label>
							<div class="select-option" id="service-select">
								<select name=" state">
									<option data-display=" Select State">Select State</option>
									<option value="1">State One</option>
									<option value="2">State Two</option>
									<option value="3">State Three</option>
									<option value="4">State Four</option>
									<option value="5">State Five</option>
								</select>
							</div>
						</div>
						<div class="col-6 mb-30">
							<label for="Country">Country</label>
							<div class="select-option" id="service-select"">
									<select name=" country">
								<option data-display=" Select Country">Select Country</option>
								<option value="1">Bangladesh</option>
								<option value="2">London</option>
								<option value="3">India</option>
								<option value="4">Nepal</option>
								<option value="5">Uganda</option>
								</select>
							</div>
						</div>
						<div class="col-6 mb-30">
							<label for="postal-code">Postal code</label>
							<input type="text" class="form-control" placeholder="Postal Code" name="postalcode" required>
						</div>
						<div class="col-6 mb-30">
							<label for="email">Email Address</label>
							<input type="email" class="form-control" placeholder="Email Address" name="email" required>
						</div>
						<div class="col-6 mb-30">
							<label for="phone">Phone Number</label>
							<input type="phone" class="form-control" placeholder="Phone Number" name="phone" required>
						</div>
					</div>

					<fieldset class="form-group">
						<label for="day">Which days you can be volunteer?</label>
						<div class="form-group ">
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="daya" id="inlineRadio1" value="Monday"> Monday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="dayb" id="inlineRadio2" value="Tuesday"> Tuesday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="dayc" id="inlineRadio3" value="Wednesday"> Wednesday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="dayd" id="inlineRadio2" value="Thursday"> Thursday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="daye" id="inlineRadio2" value="Friday"> Friday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="dayf" id="inlineRadio2" value="Saturday"> Saturday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="dayg" id="inlineRadio2" value="Sunday"> Sunday
								</label>
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<label for="note">Volunteer Note</label>
						<textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Write message" name="note"></textarea>
					</div>
					<button type="submit" class="primary-btn float-right" name="submit">Send Request</button>
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
								<li><a href="about.php">About</a></li>
							</ul>
							<ul class="col footer-nav">
								<li><a href="volunteer.html">Volunteer</a></li>
								<!--  <li><a href="blog-home.html">Blog</a></> -->
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