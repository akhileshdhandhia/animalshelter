<?php
$server = "localhost";
$dbname = "animalshelter";
$user = "root";

$conn = new mysqli($server, $user, "123", $dbname);
if ($conn->connect_error) {
    die("connection error");
}
