<?php
    include 'dbcon.php';

    $userId = 10001;

    $sql = "DELETE FROM user_accounts WHERE uid = $userId";

    if ($conn->query($sql) === TRUE) {
        echo "record removed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>