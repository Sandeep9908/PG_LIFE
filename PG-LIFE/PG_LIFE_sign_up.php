<?php
$db_hostname = "localhost";
$db_username="CSKR";
$db_password="Cskr@9908";
$db_name = "PG_LIFE_login_data";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize user inputs
$first_name = $conn->real_escape_string($_POST["first_name"]);
$last_name = $conn->real_escape_string($_POST["last_name"]);
$Mobile_number = $conn->real_escape_string($_POST["Mobile_number"]);
$email = $conn->real_escape_string($_POST["email"]);
$password = $conn->real_escape_string($_POST["password"]);
$Conform_password = $conn->real_escape_string($_POST["Conform_password"]);

// Check if passwords match
if ($password !== $Conform_password) {
    die("Passwords do not match");
}

// Hash the password before storing it
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Insert user data into the specified table
$insert_sql = "INSERT INTO login (FIRST_NAME, LAST_NAME, MOBILE_NUMBER, EMAIL_ID, ENTER_PASSWORD, CONFORM_PASSWORD) 
               VALUES ('$first_name', '$last_name', '$Mobile_number', '$email', '$hashed_password', '$hashed_password')";

if ($conn->query($insert_sql) === TRUE) {
    echo "Login details are successfully saved";
} else {
    echo "Login unsuccessfully: " . $conn->error;
}

// Close connection
$conn->close();
?>
