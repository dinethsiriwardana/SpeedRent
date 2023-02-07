<?php
    include 'dbcon.php';

    $from = 'from_id';
    $msg = 'msg';
    $tbl = 'msg_table';

    $sql = "SELECT $from, $msg FROM $tbl";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row[$from]. " - Message: " . $row[$msg]."<br>";
      }
    } else {
      echo "0 results";
    }

    $conn->close();
?>
