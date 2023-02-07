
<?php
include "dbcon.php";
include "";

session_start();



$email =    $_POST['email'];
$uname =  $_POST['username'];
$pwd = encryption($_POST['password']);
$pwdcom = encryption($_POST['passwordagn']);


    $sql = "INSERT INTO user_accounts (, U_password,Approval)
    VALUES ('$username', '$password','N')";
    if ($conn->query($sql) === TRUE) {
        header("location: ../register_personal.php?user=$username");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



$conn->close();


Footer
© 2023 GitHub, Inc.
Footer navigation

    Terms
    Privacy
    Security
    Status
    Docs
    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

Easy-Bank-System---Group-Project-by-PHP/reg_user_data.php at master · dinethsiriwardana/Easy-Bank-System---Group-Project-by-PHP
