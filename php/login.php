<?php
include "dbcon.php";
include "encryption.php";

session_start();


$email =    $_POST["email"];
//$password =  $_POST['password'];
$password =  encryption($_POST["password"]);


$table = "user_accounts";
$where = "email = '$email' AND password = '$password'";

$select = "*";




// $sql = "SELECT * FROM user_accounts where password=$password";
$sql = "SELECT $select FROM $table where $where";
// $result = $conn->query($sql);
// $result->num_rows == 1
if ($result = $conn->query($sql)) {
    $row = $result->fetch_assoc();

    echo $uid = $row["email"];
 
}
else{
    echo("\nno data");
}
?>    