<?php

$path = "../";
include $path . "dbcon.php";


$msg = $_GET['msgid'];

// delete data from msg_table 
$sql = "DELETE FROM msg_table WHERE msgid=$msg";


if ($conn->query($sql) === TRUE) {
    header("location: ../../user-msg.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
