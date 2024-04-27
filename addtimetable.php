<?php
$servername = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "transport_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$busNo = $_POST['busno'];
$route = $_POST['route'];
$time = $_POST['time'];

// SQL to insert data into the table
$sql = "INSERT INTO timetable (bus_no, route, time) VALUES ('$busNo', '$route', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "Timetable inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
