<?php
    include 'dbcon.php';

    $tbl = 'item_table';
    $feild_1 = 'car_name';
    $value_1 = 'Toyota';
    $feild_2 = 'carid';
    $value_2 = 1;

    $sql = "UPDATE $tbl SET $feild_1 = '$value_1' WHERE $feild_2 = '$value_2'";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>