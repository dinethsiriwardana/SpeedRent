<?php 
$servername = "191.96.56.1";
$username = "username";
$password = "UDU>;ll4&";
$dbname = "u812963415_fot_car_rent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>