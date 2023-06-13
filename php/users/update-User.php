<?php
include "../../php/dbcon.php";
include "../../php/encryption.php";

$dclientids = explode(",", decryption($_COOKIE['UID']));
$uid = $dclientids[0];

$useremail =  $_POST['email'];
$firstname =  $_POST['firstname'];
$lastname  =  $_POST['lastname'];
$address   =  $_POST['address'];
$phoneNo   =  $_POST['phoneNo'];
$idNo      =  $_POST['idNo'];

$table = "user_accounts";
$where = "email = '$useremail' AND uid = $uid";
$set = "fname = '$firstname', lname = '$lastname', address = '$address', phoneNo = '$phoneNo', idno = '$idNo'";

$sql = "Update $table set $set where $where";
echo $sql;
if ($conn->query($sql) === TRUE) {

    header("Location: ../../user-details.php");
} else {
    echo "Error updating details: " . $conn->error;
    header("Location: ../../user-details.php?error=1");
}
