<?php
session_start();
if (isset($_SESSION["email"])) {
    $mainEmail = $_SESSION["email"];
} else {
    $mainEmail = false;
}
include_once "./config/db.php";
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
                        Previous entries
                    </h1>
                    <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="prevrecord.php"> Previous records</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    
    <!-- Start cat-list Area -->
    <section class="cat-list-area section-gap">
        <div class="container">
            <div class="col-lg-12">
                <?php
                    $listRequest = $conn->query("select * from `request` where `email`='$mainEmail'");
                    if ($listRequest->num_rows > 0) {
                        while ($row = $listRequest->fetch_assoc()) {
                        ?>
                <div class="adopt-details">
                    <h5 class="details"><?php echo $row["first_name"]." ".$row["last_name"];?></h5>
                    <h5 class="details"><?php echo $row["address"];?></h5>
                    <h5 class="details"><?php echo $row["city"].", ".$row["pincode"];?></h5>
                    <h5 class="details"><?php echo $row["email"];?></h5>
                    <h5 class="details"><?php echo $row["phone"];?></h5>
                    <h5 class="details"><?php 
                        if($row["dog"])
                            echo "Dog: ";
                        elseif($row["cat"])
                            echo "Cat: ";
                        echo $row["breed"];?></h5>
                    <h5 class="details"><?php echo $row["message"];?></h5>
                </div>
                        <?php }} ?>
            </div>
        </div>
    </section>
    <!-- End cat-list Area -->


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