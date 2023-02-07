
<?php
include "dbcon.php";
include "encryption.php";

session_start();



$email = $_POST['email'];
$uname = $_POST['username'];
$pwd = encryption($_POST['password']);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$add = $_POST['address'];
$phnno = $_POST['phonenum'];
$ID = $_POST['idno'];

    $sql = "INSERT INTO user_accounts (email, user_name, password, fname, lname, address, phoneNo, idno)
    VALUES ('$email', '$uname','$pwd', '$fname', '$lname', '$add', '$phnno', '$ID')";
    if ($conn->query($sql) === TRUE) {
        echo "\n\nUser record added succesfully";

    } else {
        echo "\n\nError: " . $sql . "<br>" . $conn->error;
    }

$conn->close();