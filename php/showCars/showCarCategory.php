<?php

// $path = "./php/";
include "../../php/dbcon.php";


$brand = "brand";
$table = "car_category";


$sql= "Select $brand,  COUNT($brand) from $table group by $brand ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["brand"]." " . $row["COUNT(brand)"].  "<br>";
    }
  } else {
    echo "0 results";
  }


?>