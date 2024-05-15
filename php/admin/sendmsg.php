<?php

include "../dbcon.php";

$select = "*";
$table = "rent_order";



$msg = $_POST['msg'];
$uid = $_POST['uid'];
$title = $_POST['title'];


$name = "name";

$sql = "insert into msg_table (msg_type, reply_msg_id, msg, seen, from_id, to_id, title)
VALUES ('info', 0, '$msg',0,$uid,0,'$title')";
if ($conn->query($sql) === TRUE) {
    header("location: ../../user.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
