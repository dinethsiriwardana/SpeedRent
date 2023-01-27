<?php 
$servername = "173.254.104.205";
$username = "mayurapa_fotdb";
$password = "3@rn(d=YjxNe";
$dbname = "mayurapa_carrent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>