<?php
    include "dbcon.php";

    $sql="SELECT carid,car_band,car_model,availability from car_table ORDER BY car_model ASC";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
            echo "CarId: " . $row["carid"]. " Car_Band: " . $row["car_band"]. " Car Model: " . $row["car_model"]. "<br>";
    }
} 
else 
{
  echo "0 results";
}

?>