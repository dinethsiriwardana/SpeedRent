<?php
    include 'dbcon.php';

    $from = '*';
    $tbl = 'rent_order';

    $sql = "SELECT * FROM $tbl";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "Order No: " . $row['orderid']. " Car No: " . $row['carid']."<br>";
      }
    } else {
      echo "0 results";
    }

    $conn->close();
?>
