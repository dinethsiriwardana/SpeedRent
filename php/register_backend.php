<?php
include "dbcon.php";
include "encryption.php";
include "SendSMS.php";
$email = $_POST['email'];

$table = "user_accounts";
$where = "email = '$email'";
$select = "*";

$sql = "SELECT $select FROM $table where $where";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "E mail address is already exists...!";
} else {
    $uname = $_POST['username'];
    $pwd = encryption($_POST['password']);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $add = $_POST['address'];
    $phnno = $_POST['phonenum'];
    $ID = $_POST['idno'];
    $msg = "Hi $fname,\n\nWelcome to Speed Rent! Your account is set up. Start renting now and enjoy our services.\n\nHappy renting! - Speed Rent";

    $sql = "INSERT INTO user_accounts (email, user_name, password, fname, lname, address, phoneNo, idno)
                VALUES ('$email', '$uname','$pwd', '$fname', '$lname', '$add', '$phnno', '$ID')";

    if ($conn->query($sql) === TRUE) {
        sendSMS($phnno, $msg);
        header("Location: ../login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
