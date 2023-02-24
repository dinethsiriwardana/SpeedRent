<?php
    include "dbcon.php";
    include "encryption.php";
    include "phpmailer/sendMail.php";



        session_start();

        $email = $_POST['email'];
        $table = "user_accounts";
        $where = "email = '$email'";
        $select = "*";

            $otp = random_int(100000, 999999);
            date_default_timezone_set('Asia/Colombo');
            $date = date('Y-m-d h:i:s');
            echo $date;
            $updatesql = "UPDATE user_accounts SET otp = $otp, otp_time = '$date'  WHERE $where";
            if($conn -> query($updatesql) === TRUE)
            {
                setcookie('OTP', encryption($otp), time() + 300, "/");
                sendMail('shadow8netsw@gmail.com');

                
              

            }else{
                echo "Error updating record ". $conn -> error;
            }

 
    

    $conn->close();   
?>