<?php
    include "dbcon.php";
    include "encryption.php";
    include "php/phpmailer/sendMail.php";

    

        $email = $_POST['email'];
        $table = "user_accounts";
        $where = "email = 'hirudilmih@gmail.com'";
        $select = "*";

            $otp = random_int(100000, 999999);
            date_default_timezone_set('Asia/Colombo');
            $date = date('Y-m-d h:i:s');
            echo $date;
            $updatesql = "UPDATE user_accounts SET otp = $otp, otp_time = '$date'  WHERE $where";
            if($conn -> query($updatesql) === TRUE)
            {
                // sendMail($subject,$body,$receiver);
              

            }else{
                echo "Error updating record ". $conn -> error;
            }
 
 
    $conn->close();   
?>