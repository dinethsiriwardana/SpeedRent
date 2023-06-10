<?php

$path = "../";
include $path . "dbcon.php";
include $path . "encryption.php";

$select = "*";
$table = "rent_order";


$dclientids = explode(",", decryption($_COOKIE['UID']));
$uid = $dclientids[0];


$msg = $_POST['msg'];
$title = $_POST['title'];


$name = "name";

$sql = "insert into msg_table (msg_type, reply_msg_id, msg, seen, from_id, to_id, title)
VALUES ('info', 0, '$msg',0,$uid,0,'$title')";
if ($conn->query($sql) === TRUE) {
    //Rederect back


    header("location: ../../user.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
