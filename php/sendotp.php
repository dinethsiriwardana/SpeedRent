<?php
    include "dbcon.php";
    include "encryption.php";

    session_start();

    function sendotp($conn)
    {
        $email = $_POST['email'];

        $table = "user_accounts";
        $where = "email = '$email'";
        $select = "*";

        // $sql = "SELECT $select FROM $table where $where";
        // $result = $conn->query($sql);


        

        // if ($result->num_rows == 1)
        // {
            $otp = random_int(100000, 999999);
            date_default_timezone_set('Asia/Colombo');
            $date = date('Y-m-d h:i:s');
            echo $date;
            $updatesql = "UPDATE user_accounts SET otp = $otp, otp_time = '$date'  WHERE $where";
            if($conn -> query($updatesql) === TRUE)
            {
                echo "Record updated successfully";
            }else{
                echo "Error updating record ". $conn -> error;
            }
        // }
        // else{
        //     echo "E mail does not exists...!";
        // }
    }
    sendotp($conn);
    $conn->close();   
?>