<?php
$db_hostname = "localhost";
$db_username="CSKR";
$db_password="Cskr@9908";

// Create connection
$conn = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

// ====== DATABASE 1: online_exam_login_data ======

// Create the first database
$sql = "CREATE DATABASE IF NOT EXISTS PG_LIFE_login_data";
if (mysqli_query($conn, $sql)) {
    echo "Database PG_LIFE_login_data created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the first database
mysqli_select_db($conn, 'PG_LIFE_login_data');

// Create user_login table in online_exam_login_data
$sql = "CREATE TABLE IF NOT EXISTS login (
    FIRST_NAME VARCHAR(50) NOT NULL,
    LAST_NAME VARCHAR(50) NOT NULL,
    MOBILE_NUMBER VARCHAR(15) NOT NULL,
    EMAIL_ID VARCHAR(100) NOT NULL PRIMARY KEY,
    ENTER_PASSWORD VARCHAR(255) NOT NULL,
    CONFORM_PASSWORD VARCHAR(255) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table login created successfully in PG_LIFE_login_data.<br>";
} else {
    echo "Error creating user_login table: " . mysqli_error($conn) . "<br>";
}

// Close connection
mysqli_close($conn);
?>