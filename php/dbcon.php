<?php 
$servername = "191.96.56.1";
$username = "u812963415_speedrent";
$password = "9i@4?MH^J]r";
$dbname = "u812963415_speedrent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>