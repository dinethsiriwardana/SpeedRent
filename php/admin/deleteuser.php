<?php

include "../dbcon.php";

//delete user
$uid = $_GET['uid'];

$sql = "DELETE FROM user_accounts WHERE uid = $uid";

if ($conn->query($sql) === TRUE) {
    header("location: ../../admin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
