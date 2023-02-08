<?php
    include "dbcon.php";
    include "encryption.php";

    session_start();

    $email = $_POST['email'];

    $table = "user_accounts";
    $where = "email = '$email'";
    $select = "*";

    $sql = "SELECT $select FROM $table where $where";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $uname = $_POST['username'];
        $pwd = encryption($_POST['password']);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $add = $_POST['address'];
        $phnno = $_POST['phonenum'];
        $ID = $_POST['idno'];

       /* $sql = "UPDATE user_accounts SET (user_name, password, fname, lname, address, phoneNo, idno)
                VALUES ('$uname','$pwd', '$fname', '$lname', '$add', '$phnno', '$ID')";*/

        $sql = "UPDATE user_accounts SET user_name ='$uname',  password = '$pwd', fname = $fname, lname = $lname, address = $add, phoneNo = $phnno, idno = $ID WHERE email = $email";
    }else{
        echo "E mail does not exists...!";
    }
?>