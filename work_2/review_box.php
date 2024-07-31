<?php

session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$feedback = $_POST['feedback'];
$fullname = $fname . " " . $lname;

$_SESSION['fullname'] = $fullname;

header("location:feedback.php");

exit();
?>