<?php

session_start();
if (isset($_SESSION["email"])) {
    $mainEmail = $_SESSION["email"];
} else {
    header("Location: signup.php");
}
