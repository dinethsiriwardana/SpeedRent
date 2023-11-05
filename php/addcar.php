<?php
include 'dbcon.php';

$cName = 'Honda';
$cModel = 'Grace';
$cDetails = 'Petrol';
$cPrice = 2000.0;
$avb = 0;

$sql = "INSERT INTO item_table (car_band, car_model, details, price, availability)
        VALUES ('$cid', '$cName', '$cModel', '$cDetails', '$cPrice', '$avb')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
