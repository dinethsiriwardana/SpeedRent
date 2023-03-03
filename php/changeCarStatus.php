<?php
    include 'dbcon.php';

    $availabality = 0;
    $carId = 30000;

    $sql = "UPDATE car_table SET availability = $availabality WHERE carid = $carId";

    if ($conn->query($sql) === TRUE) {
        echo "record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>