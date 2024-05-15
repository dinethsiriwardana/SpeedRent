<?php

$path = "../";
include $path . "dbcon.php";


$orderid = $_GET['orderid'];

// delete data from msg_table 
$sql = "DELETE FROM rent_order WHERE orderid=$orderid";


if ($conn->query($sql) === TRUE) {
    header("location: ../../user.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
