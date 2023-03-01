<?php
include "dbcon.php";
include "encryption.php";
include "phpmailer/sendMail.php";
include "SendSMS.php";




session_start();
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach ($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time() - 1000);
        setcookie($name, '', time() - 1000, '/');
    }
}

$email = $_POST['email'];
$table = "user_accounts";
$where = "email = '$email'";
$select = "*";




$sql = "SELECT $select FROM $table where $where";
$result = $conn->query($sql);


if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $phnno = $row["phoneNo"];

    $otp = random_int(100000, 999999);
    date_default_timezone_set('Asia/Colombo');
    $date = date('Y-m-d h:i:s');
    $msg = "Speed Rent \nYour OTP code for Speed Rent is $otp. Please do not share this code with anyone.";

    $updatesql = "UPDATE user_accounts SET otp = $otp, otp_time = '$date'  WHERE $where";
    if ($conn->query($updatesql) === TRUE) {
        sendSMS($phnno,$msg);

        setcookie('email', encryption($email), time() + 420, "/");
        setcookie('OTP', encryption($otp), time() + 300, "/");
        setcookie('PN', encryption($phnno), time() + 300, "/");
        // sendMail('shadow8netsw@gmail.com');
        header("Location: ../password_otp.html");






    } else {
        echo "Error updating record " . $conn->error;
    }
}




$conn->close();
