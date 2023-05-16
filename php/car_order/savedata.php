<?php
include "../dbcon.php";
include "../encryption.php";
include "../SendSMS.php.php";


$dclientids = explode(",", decryption($_COOKIE['UID']));

$uid = $dclientids[0];
$carid = $_POST['carid'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$pickup_type = $_POST['pickup_type'] == "pickup" ? 1 : 0;
$return_type = $_POST['return_type'] == "pickup" ? 1 : 0;
$stts = $_POST['stts'];
$stts_details = $_POST['stts_details'];
$price = $_POST['price'];
$payment = $_POST['payment'];

// Create the SQL query
$sql = "INSERT INTO rent_order (carid, uid, date_from, date_to, pickup_type, return_type, stts, stts_details, price, payment)
        VALUES ($carid, $uid, '$date_from', '$date_to', $pickup_type, $return_type, '$stts', '$stts_details', $price, '$payment')";


// Execute the query
if ($conn->query($sql) === TRUE) {
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
