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
$route = $_POST['route'];
$busno = $_POST['busno'];
$time = $_POST['time'];
$isExtraTime = $_POST['group1'];

// SQL to insert data into the table
$sql = "INSERT INTO duties (route, bus_no, time, extra_time) VALUES ('$route', '$busno', '$time', '$isExtraTime')";

if ($conn->query($sql) === TRUE) {
    echo "Duties assigned successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
