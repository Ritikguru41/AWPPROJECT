<?php
// Database connection
$servername = "localhost";
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "user_auth_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$location = $_POST['location'];
$no_of_persons = $_POST['no_of_persons'];
$phone_no = $_POST['phone_no'];
$arrival_date = $_POST['arrival_date'];
$departure_date = $_POST['departure_date'];

// Insert data into database
$sql = "INSERT INTO bookings (location, no_of_persons, phone_no, arrival_date, departure_date)
VALUES ('$location', $no_of_persons, '$phone_no', '$arrival_date', '$departure_date')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
