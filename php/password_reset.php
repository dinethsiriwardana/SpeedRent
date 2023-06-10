<?php
    include "dbcon.php";
    include "encryption.php";


    $passwordagn =  $_POST['passwordagn'];

    $table = "user_accounts";
    $where = "email = $email";
    $set = "password = $passwordagn";
    
    $sql = "UPDATE $table SET $set WHERE $where";

    if ($conn->query($sql) === TRUE) {  // if the query is successful   
        echo "Password updated successfully";
    } else {
        echo "Error updating password: " . $conn->error;
    }
    
?>