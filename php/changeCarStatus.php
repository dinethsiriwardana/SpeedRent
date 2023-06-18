<?php
    include 'dbcon.php';

    $carId = 30000;

    $availability = $_GET['avl'];

    if($availability == "avaiable"){
        $sql = "UPDATE car_table SET availability = 3 WHERE carid = $carId";
    }
    else if($availability == "navaiable"){
        $sql = "UPDATE car_table SET availability = 0 WHERE carid = $carId";
    }
    else{
        $sql = "UPDATE car_table SET availability = 2 WHERE carid = $carId";
    }

    

    if ($conn->query($sql) === TRUE) {
        echo "record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>