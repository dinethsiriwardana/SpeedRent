
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
        echo "E mail address is already exists...!";
    }else{
        $uname = $_POST['username'];
        $pwd = encryption($_POST['password']);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $add = $_POST['address'];
        $phnno = $_POST['phonenum'];
        $ID = $_POST['idno'];

        $sql = "INSERT INTO user_accounts (email, user_name, password, fname, lname, address, phoneNo, idno)
                VALUES ('$email', '$uname','$pwd', '$fname', '$lname', '$add', '$phnno', '$ID')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../login.html");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
$conn->close();