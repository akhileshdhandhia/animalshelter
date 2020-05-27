<?php
session_start();
if (isset($_SESSION["email"])) {
    header("Location: index.php");
}

include_once "./config/db.php";
if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordAgain = $_POST["passwordAgain"];

    if ($password != $passwordAgain) {
?>
        <script>
            alert("Password mismatch!");
        </script>
        <?php
    } else {
        $checkEmailExists = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'");
        if ($checkEmailExists->num_rows > 0) {
        ?>
            <script>
                alert("User Exists! Please log in.");
            </script>
            <?php
        } else {
            $addUser = $conn->query("INSERT INTO `users` VALUES (NULL, '$fname','$lname','$email','$password')");
            if (!$addUser) {
            ?>
                <script>
                    alert("Error! Please try again");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("User Registered! Please log in to continue!");
                </script>
        <?php
            }
        }
    }
}


//For Login
if (isset($_POST["submitLogin"])) {
    $email = $_POST["emailLogin"];
    $password = $_POST["passwordLogin"];

    $checkEmailExists = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'");
    if ($checkEmailExists->num_rows == 0) {
        ?>
        <script>
            alert("User not found! Please Sign Up");
        </script>
        <?php
    } else {
        $checkLogin = $conn->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
        if ($checkLogin->num_rows > 0) {
            //login success
            $_SESSION["email"] = $email;

            session_commit();
            header("Location: index.php");
        } else {
        ?>
            <script>
                alert("Incorrect Password! Please re-enter");
            </script>
<?php
        }
    }
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
    <title> Sign Up |Animal Shelter</title>

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
    <header id="header" id="home">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active">
                            <a href="index.php">Home</a>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="cats.html">Cats</a></li>
                        <li><a href="dogs.html">Dogs</a></li>
                        <li><a href="volunteer.html">Volunteer</a></li>
                        <!-- <li class="menu-has-children">
                            <a href="">Blog</a>
                            <ul>
                                <li>
                                    <a href="blog-home.html">Blog Home</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">Blog Single</a>
                                </li>
                            </ul>
                        </li> -->
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="signup.php">Sign Up/Login</a></li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Sign Up
                    </h1>
                    <p class="text-white link-nav">
                        <a href="index.php">Home </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="contact.html"> Sign Up</a>
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

                <div class="col-lg-12">

                    <div class="row" style="justify-content:center;">
                        <div class="col-lg-6 form-group" style="justify-content:center;">
                            <div class="contact-details">
                                <h5>Sign Up</h5>
                            </div>
                            <form class="form-area" id="myForm" action="" method="post" class="contact-form text-right">
                                <input name="fname" placeholder="Enter your first name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your first name'" class="common-input mb-20 form-control" required="" type="text" />
                                <input name="lname" placeholder="Enter your last name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your last name'" class="common-input mb-20 form-control" required="" type="text" />

                                <input name="email" autocomplete="off" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email" />

                                <input name="password" autocomplete="off" placeholder="Enter your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" class="common-input mb-20 form-control" required="" type="password" />
                                <input name="passwordAgain" placeholder="Enter your password again" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password again'" class="common-input mb-20 form-control" required="" type="password" />
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <!-- <div class="alert-msg" style="text-align: left;"></div>
                                <br> -->
                                    <input type="Submit" name="submit" class="genric-btn primary circle" value="Sign Up">

                                    </input>
                                </div>
                            </form>
                        </div>
                        <br>

                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row" style="justify-content:center;">
                        <div class="col-lg-6 form-group">
                            <div class="contact-details">
                                <h5>Login</h5>
                            </div>
                            <form class="form-area" id="myForm1" action="" method="post" class="contact-form text-right">
                                <input name="emailLogin" autocomplete="off" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email" />

                                <input name="passwordLogin" autocomplete="off" placeholder="Enter your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" class="common-input mb-20 form-control" required="" type="password" />
                                <br>
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <!-- <div class="alert-msg" style="text-align: left;"></div>
                                <br> -->
                                    <input type="Submit" name="submitLogin" class="genric-btn primary circle" value="Login">

                                    </input>
                                </div>
                            </form>
                        </div>

                    </div>

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
                                <li><a href="about.html">About</a></li>
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
    <script src="js/main.js"></script>
</body>

</html>