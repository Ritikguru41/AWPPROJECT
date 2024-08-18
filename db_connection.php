<?php
$servername = "localhost";
$username = "root";
$password = ""; // Your MySQL password, or leave it empty if there is none
$dbname = "user_auth_db"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
