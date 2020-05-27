<?php
session_start();
if (isset($_SESSION["email"])) {
	$mainEmail = $_SESSION["email"];
} else {
	$mainEmail = false;
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
		<div class="container">
			<div class="overlay overlay-bg"></div>
			<div class="row fullscreen d-flex align-items-center justify-content-start">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="text-uppercase">
						Adopt Us. <br>
						We need your help.
					</h1>
					<p class="text-white sub-head">
						Adopting a pet has many benefits, some of which you may have not considered.
						By adopting from a shelter, you are providing an animal with the second chance they deserve.
					</p>
					<a href="about.php" class="primary-btn header-btn text-uppercase">Find a pet to adopt</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->




	<!-- Start callto-top Area -->
	<section class="callto-top-area section-gap">
		<div class="container">
			<div class="row justify-content-between callto-top-wrap pt-40 pb-40">
				<div class="col-lg-8 callto-top-left">
					<h1>Please select your favourite pet</h1>
				</div>
				<div class="col-lg-4 callto-top-right">
					<a href="adopt.php" target="_blank" class="primary-btn">Fill Adoption Form</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End callto-top Area -->


	<!-- Start home-about Area -->
	<section class="home-about-area">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-left no-padding">
					<img src="img/about-img.jpg" alt="">
				</div>
				<div class="col-lg-6 home-about-right no-padding">
					<h1>
						Globally Connected
						by Large Network
					</h1>
					<h5>We are here to listen to you and deliver exellence</h5>
					<p>
						We at Petshelter are globally connected by a Large Network and make sure that we fulfill all our customers needs and by the end of the entire process they are happy and satisfied with our process.
					</p>
					<a href="#" class="primary-btn text-uppercase">get details</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->


	<!-- Start video Area -->
	<section class="video-area section-gap">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-8">
					<div class="about-video-right justify-content-center align-items-center d-flex relative">
						<div class="overlay overlay-bg"></div>
						<a class="play-btn" href="img/video.mp4"><img class="img-fluid mx-auto" src="img/play-btn.png" alt=""></a>
						</video>
					</div>
					<div class="description">
						<h4>Watch this video to know why you should adopt a pet</h4>
						<p>
							Parents that have pets provide life lessons and extended benefits to their children. Not only does having a pet naturally teach children responsibilities, but it can also help them with separation anxiety and feeling a sense of security when they are at home.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End video Area -->


	<!-- Start process Area -->
	<section class="process-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Process to adopt a pet</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-process">
						<span class="lnr lnr-thumbs-up"></span>
						<a href="#">
							<h4>
								Pet Selection
							</h4>
						</a>
						<p>
							Select the pet as per your preference that you wan to adopt.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-process">
						<span class="lnr lnr-license"></span>
						<a href="adopt.php" target="_blank">
							<h4>
								Adoption Form Filling
							</h4>
						</a>
						<p>
							Fill up the Adoption Form and enter all the required details carefully for us to know more about you.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-process">
						<span class="lnr lnr-user"></span>
						<a href="contact.php" target="_blank">
							<h4>
								Meeting Authority
							</h4>
						</a>
						<p>
							Meet the authority to begin the process of adoption.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-process">
						<span class="lnr lnr-magic-wand"></span>
						<a href="#">
							<h4>
								Bring to new family
							</h4>
						</a>
						<p>
							Finally bring a new pet into your family and start a beautiful journey.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End process Area -->


	<!-- Start testomial Area -->
	<section class="testomial-area section-gap" id="testimonail">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Testimonials from our customers</h1>
						<p>Read about their experiences of adopting a pet from Petshelter</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-testimonial-carusel">
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t1.jpg" alt="">
						<p class="desc">
							“I had the most wonderful experience adopting a dog from PetShelter this summer. Biscuit is a year-old terrier mix and the absolute sweetest girl, and she came house-trained, too. Everyone who sees her loves her, and she has settled in perfectly to City life. I can’t say enough about PetShelter. They have an experienced, caring staff, and I highly recommend this rescue organization without reservation!”
						</p>
						<h4>Rahul Agarwal</h4>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t2.jpg" alt="">
						<p class="desc">
							“Over the last two years we’ve learned a lot from Beaker. We’ve certainly had some challenges, but he has made tremendous progress and has taught us to be more patient and to enjoy the small things in life. We couldn’t be happier! Beaker is a great companion, whether we’re running, hiking, or just sitting at home. We can’t imagine our lives without him! Thank you for bringing him into our lives.
						</p>
						<h4>Rio Bhattacharjee</h4>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t3.jpg" alt="">
						<p class="desc">
							“The most important and best decision we made was to adopt both Muffin and Lola. We originally wanted just a black kitten but there was no way we could have left the other behind. They adore each other – and the mayhem and love fests they indulge in are just so precious – it’s non-stop entertainment. We love these critters to no end. Thank you, PetShelter! They are make our life more beautiful.”
						</p>
						<h4>Rene Banik</h4>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t4.jpg" alt="">
						<p class="desc">
							“Little Lucy came from PetShelter 15 years ago and she is still full of love & life at 18. She has been my inspiration to spread the word that people need to rescue a dog instead of buying one. Lucy has changed my life in so many ways and I am grateful to the organization for all that they do. Please support them, because without them there wouldn’t be so many happy dogs running around.”
						</p>
						<h4>Robin Dutt</h4>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t5.jpg" alt="">
						<p class="desc">
							“I don’t think we adopted Duffy. He adopted us. We went to the adoption expo unsure if we were ready for another cat after our boy passed away in February. But when we walked past his cage, Duffy stuck out his little arm and grabbed me. We knew he belonged with us. He has brought new joy to our family!’Thank you for all the wonderful work you do with homeless animals. Its really commendable”
						</p>
						<h4>Brotin Das</h4>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t6.jpg" alt="">
						<p class="desc">
							“Zoey has finally learned to trust again after being rescued from a puppy mill. She is still fearful at times but after two years of love and patience she is turned into a real dog! I just wanted to thank everyone at PetShelter for taking such good care of her before I adopted her. It was such a wonderful feeling knowing so many people were passionate and routing for her to have a positive outcome.”
						</p>
						<h4>Dr. Zaira Habibi</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End testomial Area -->

	<!-- Start calltoaction Area -->
	<section class="calltoaction-area section-gap relative">
		<div class="container">
			<div class="overlay overlay-bg"></div>
			<div class="row align-items-center justify-content-center" style="flex-direction: column;">
				<h1 class="text-white">Want to help? Become a Volunteer</h1>
				<p class="text-white">
					Being an animal shelter volunteer is good for your emotional, physical, and mental health. It is scientifically proven that spending time with animals helps lower your stress levels and blood pressure. It will also keep you active, especially if you prefer to walk dogs. You get to create a unique bond with the animals, which helps your emotional health.
					Caring for pets can help you deal with depression, anxiety, and stress.
				</p>

				<div class="buttons d-flex flex-row">
					<a href="volunteer.html" class="primary-btn text-uppercase">Register now</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End calltoaction Area -->

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