<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG Life Room Booking Receipt</title>
    <link rel="stylesheet" href="booking_receipt.css">
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['name'])) {
        echo "No booking information available.";
        exit();
    }

    // Calculate total amount based on the number of days
    $checkin = strtotime($_SESSION['checkin']);
    $checkout = strtotime($_SESSION['checkout']);
    $days = ($checkout - $checkin) / (60 * 60 * 24);
    $totalAmount = $_SESSION['price'] * $days;
    ?>

    <div class="container">
        <h1> PG-LIFE Booking Receipt</h1>
        <img src="logo.png "height="50" width="100">
        <p><strong>Full Name:</strong> <?php echo $_SESSION['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $_SESSION['phone']; ?></p>
        <p><strong>Room Type:</strong> <?php echo $_SESSION['room_type']; ?></p>
        <p><strong>Price per Day:</strong> ₹<?php echo $_SESSION['price']; ?></p>
        <p><strong>Check-in Date:</strong> <?php echo $_SESSION['checkin']; ?></p>
        <p><strong>Check-out Date:</strong> <?php echo $_SESSION['checkout']; ?></p>
        <p><strong>Total Amount:</strong> ₹<?php echo $totalAmount; ?></p>

        <div class="pg-life-key-points">
            <h3>Why Choose PG Life?</h3>
            <p>- Comfort and Convenience with Fully-Furnished Rooms</p>
            <p>- Flexible, Hassle-Free Bookings to Suit Your Lifestyle</p>
        </div>

        <button onclick="printReceipt()">Print Receipt</button>
    </div>

    <script>
    function printReceipt() {
        window.print();
    }
    </script>
</body>
</html>
