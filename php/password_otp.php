<?php
    include "dbcon.php";
    include "encryption.php";



    $otp =  $_POST['otp'];
    //$password =  encryption($_POST["password"]);
    $email = "hirudilmih@gmail.com";

    $table = "user_accounts";
    $where = "email = $email  AND otp = $otp";
    $select = "*";

    /*$sql = "SELECT $select FROM $table WHERE $where";
    if ($result = $conn->query($sql)) {
        //$row = $result->fetch_assoc();

        echo ("You entered correct OTP.");
    } else {
        echo ("\nPlease enter the correct OTP.");
    }*/


$sql = "SELECT $select FROM $table WHERE $where";

if ($result = $conn->query($sql)) {
    echo ("You entered correct OTP.");
} else {
  echo ("\nPlease enter the correct OTP.");
}
?>