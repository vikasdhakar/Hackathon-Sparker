<?php
$servername = "localhost";
$username = "root";
$password = "guru0011";
$dbname = "erento";

// Create connection
$conn = new mysqli($servername, $username);
mysqli_select_db($conn,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>