<?php
session_start();

// Store form data in session variables
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['checkin'] = $_POST['checkin'];
$_SESSION['checkout'] = $_POST['checkout'];
$_SESSION['room_type'] = "Deluxe Room";
$_SESSION['price'] = 2500; // Price per day

// Redirect to booking receipt page
header("Location: booking_receipt.php");
exit();
?>
