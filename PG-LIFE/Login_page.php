<?php
$db_hostname = "localhost";
$db_username = "CSKR";
$db_password = "Cskr@9908";
$db_name = "PG_LIFE_login_data";

// Create connection
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $conn->real_escape_string($_POST["email"]);
$password = $_POST["password"];

// Fetch user data based on email
$sql = "SELECT * FROM login WHERE EMAIL_ID = '$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Query failed: " . mysqli_error($conn);
    exit;
}

$user = mysqli_fetch_assoc($result);

// Check if user exists and verify the hashed password
if ($user) {
    if (password_verify($password, $user["ENTER_PASSWORD"])) {
        echo '<script>alert("Your login is successfully completed");</script>';  
        echo '<script>window.location.href = "PG_LIFE_HOME.html";</script>';
    } else {
        echo '<script>alert("Invalid password.");</script>';
        echo '<script>window.location.href = "LOGIN_PAGE.html";</script>';
    }
} else {
    echo '<script>alert("Email not found.");</script>';
    echo '<script>window.location.href = "LOGIN_PAGE.html";</script>';
}

mysqli_close($conn);
?>
