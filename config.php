<?php
$servername = "j5zntocs2dn6c3fj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "ispdec3h1kmywx58";
$password = "wffu1yoh6mc2dqy2";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
global $message;
$message = "blank";
    die("Connection failed: " . $conn->connect_error);
$message = "fail";
}
$message = "true";