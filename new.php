<?php
$servername = "localhost";
$username = "root";
$password = " priya123 "; // Replace with your actual password
$database = "priyadb"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $priya123, $priyadb);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
