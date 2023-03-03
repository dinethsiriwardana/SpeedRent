<?php
    include "encryption.php";
    include "dbcon.php";

    session_start();

     $getotp = $_POST['otp'];
     $cookieotp = decryption($_COOKIE['OTP']);
     $cookieemail = decryption($_COOKIE['email']);
    
    $select = "*";
    $table = "user_accounts";
    $where = "email = '$cookieemail'";

     $sql = "SELECT $select FROM $table where $where";

     $result = $conn->query($sql);


     if ($result->num_rows == 1) {
         $row = $result->fetch_assoc();
          $otp = $row["otp"];
         if (($otp == $getotp) == $cookieotp) {
            setcookie('OTP', encryption('done'), time() + 300, "/");

            header("Location: ../password_reset.html");

        }
    }
