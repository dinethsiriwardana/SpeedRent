<?php
include "dbcon.php";
include "encryption.php";

session_start();


$email =    $_POST["email"];
//$password =  $_POST['password'];
$password =  encryption($_POST["password"]);


$table = "user_accounts";
$where = "(email = '$email' OR user_name = '$email') AND password = '$password'";

$select = "*";

$sql = "SELECT $select FROM $table where $where";
$result = $conn->query($sql);


if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();
    $datARR = [$row['uid'], $row['email'], $row["phoneNo"]];
    // $userName,$userPassword,$userAccound,$cardNO,$csvNo,$price

    $usertype = $row["usertype"];

    // $userName,$userPassword,$userAccound,$cardNO,$csvNo,$price

    setcookie('UID', encryption(implode(",", $datARR)), time() + 24000, "/");
    setcookie('USERTYPE', encryption($usertype), time() + 24000, "/");



    // echo $uid = $row["email"];
    header("Location: ../index.php");



    // echo $uid = $row["email"];
} else {
    header("Location: ../login.php?error=''");
}
