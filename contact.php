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
function showAlert($message){
    ?>
    <script>
    var message='<?php echo $message ;?>';
    alert(message);
    </script>
    <?php
}
if (isset($_POST["submit"])) {
	$name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
	
    $addContact = $conn->query("INSERT INTO `contact` VALUES (NULL, '$name','$email','$subject','$message');");
		if ($addContact) {
            showAlert("Thank you for contacting us :*");
        } else {showAlert("Request not submitted");}
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="codepixer" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Animal Shelter</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/main.css" />
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
                        Contact Us
                    </h1>
                    <p class="text-white link-nav">
                        <a href="index.php">Home </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="contact.php"> Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Kolkata, India</h5>
                            <p>249, BD block Saltlake </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>+91 79802 08525</h5>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>support@petshelter.org</h5>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="form-area" id="myForm" method="post" class="contact-form text-right">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text" />

                                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email" />

                                <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text" />
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="genric-btn primary circle" style="float: right;" name="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->

    <!-- start footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row pt-120 pb-80">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            We use the power of the Internet to connect
                            adopters with shelter pets and help pets go from
                            alone to adopted. We're working to help the good
                            people at shelters and rescue groups find homes
                            for their pets. But we don't stop there. We also
                            provide useful and informative information on
                            the human/companion animal relationship to help
                            keep pets healthy and permanently in their
                            loving homes.
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
                                <li>
                                    <a href="volunteer.html">Volunteer</a>
                                </li>
                                <!-- <li><a href="blog-home.html">Blog</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
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
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> -->
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- <script src="js/mail-script.js"></script> -->
    <script src="js/main.js"></script>
</body>

</html>