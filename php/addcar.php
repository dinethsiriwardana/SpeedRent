<?php
include 'dbcon.php';

// Retrieve data from the form
$car_brand = $_POST['car_brand'];
$car_model = $_POST['car_model'];
$number_plate = $_POST['number_plate'];
$price_per_hour = $_POST['price_per_hour'];
$num_of_seats = $_POST['num_of_seats'];
$ownership = isset($_POST['ownership']) ? $_POST['ownership'] : 0;
$owner_name = $_POST['owner_name'];
$owner_id = $_POST['owner_id'];
$owner_tel = $_POST['owner_tel'];

// Create an SQL insert query
$sql = "INSERT INTO car_table (car_brand, car_model, number_plate, price, noofseat, ownership, owner_name, owner_id, owner_tel,availability) VALUES ('$car_brand', '$car_model', '$number_plate', $price_per_hour, $num_of_seats, $ownership, '$owner_name', '$owner_id', '$owner_tel',1)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Car data added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

header("Location: ../index.php");
