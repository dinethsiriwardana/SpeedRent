<?php
include "dbcon.php";
include "encryption.php";




function deleteData($conn,$uid){
    $sql = "DELETE FROM user_accounts WHERE uid= '$uid'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
}



?>