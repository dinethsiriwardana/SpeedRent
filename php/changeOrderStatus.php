<?php
    include 'dbcon.php';

    $status = 'Reject';
    $orderId = 20001;

    $sql = "UPDATE rent_order SET stts = '$status' WHERE orderid = $orderId";

    if ($conn->query($sql) === TRUE) {
        echo "order record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>