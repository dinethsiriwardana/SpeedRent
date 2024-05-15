<?php
include "../dbcon.php";
include "../encryption.php";


$dclientids = explode(",", decryption($_COOKIE['UID']));
$uid = $dclientids[0];

$reason = $_POST["reason"];
$date = $_POST["date"];

$sql = "INSERT INTO medical_table (emp_id, reason, date) VALUES ('$uid', '$reason', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Medical information submitted successfully";
    header("Location: ../../emp_medical.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
