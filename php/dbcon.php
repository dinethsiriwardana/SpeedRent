<?php 
$servername = "191.96.56.1";
$username = "mayurapa_carrent";
$password = "8Vry3U+8cB";
$dbname = "mayurapa_carrent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>