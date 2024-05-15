<?php
include 'dbcon.php';

$carId = $_GET['carid'];

$availability = $_POST['avl'];

if ($availability == "avaiable") {
    $sql = "UPDATE car_table SET availability = 1 WHERE carid = $carId";
} else if ($availability == "navaiable") {
    $sql = "UPDATE car_table SET availability = 0 WHERE carid = $carId";
} else {
    $sql = "UPDATE car_table SET availability = 2 WHERE carid = $carId";
}



if ($conn->query($sql) === TRUE) {
    header("Location: ../admin-cars.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();
