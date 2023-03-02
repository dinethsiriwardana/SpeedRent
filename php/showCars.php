<?php
    include 'dbcon.php';

    $brand = 'car_band';
    $model = 'car_model';
    $price = 'price';
    $type = 'fuel';
    $seats = 'noofseat';
    $availability = 'availability';

    $tbl = 'car_table';

    $sql = "SELECT $brand, $model, $price, $type, $seats FROM $tbl WHERE $availability = 1";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "Brand: " . $row[$brand]. "<br> Model: " . $row[$model]. "<br> Price: " . $row[$price]."<br> Fuel Type: " . $row[$type]."<br>  No of Seats: " . $row[$seats]."<br><br><br>";
      }
    } else {
      echo "0 results";
    }

    $conn->close();
?>
