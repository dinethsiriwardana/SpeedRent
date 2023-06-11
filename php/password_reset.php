<?php
    include "dbcon.php";
    include "encryption.php";


    $passwordagn =  $_POST['passwordagn'];

    $table = "user_accounts";
    $where = "email = $email";
    $set = "password = $passwordagn";
    
        $passwordagn =  encryption($_POST['passwordagn']);
    
        $table = "user_accounts";
        $where = "email = '$cookieemail'";
        $set = "password = '$passwordagn'";
        
        echo $sql = "UPDATE $table SET $set WHERE $where";
    
        if ($conn->query($sql) === TRUE) {
         $msg = "Speed Rent \nYour password has been successfully reset.";
             sendSMS($phnno,$msg);
            header("Location: ../login.php");
        } else {
            echo "Error updating password: " . $conn->error;
          header("Location: ../password_reset_email.html");
        }
    
?>