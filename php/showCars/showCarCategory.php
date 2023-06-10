<?php

// $path = "./php/";
include "php/dbcon.php";


$brand = "brand";
$table = "car_category";


$sql= "Select $brand,  COUNT($brand) from $table group by $brand ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      // echo "id: " . $row["brand"]." " . $row["COUNT(brand)"].  "<br>";
    
      echo '                        <div class="col-6 d-xxl-flex justify-content-xxl-center align-items-xxl-center" 
      style="box-shadow: 0px 0px 6px rgba(33,37,41,0.12);padding: 30px;padding-right: 30px;padding-left: 20px;padding-top: 30px;padding-bottom: 30px;border-radius: 10px;margin: 0;width: 49%;border: 1.5px solid var(--bs-gray-200);margin-bottom: 20px;background: url(&quot;assets/car-cat/'. $row["brand"].'.jpg&quot;) center / cover no-repeat;height: 300px;">
                            <div class="row row-cols-1 text-center" data-bss-hover-animate="pulse" style="width: 100%;margin-right: 0;margin-bottom: 0;height: 100%;margin-left: 0;background: rgba(0,0,0,0.61);">
                                <div class="col">
                                    <h1 style="font-size: 117px;color: var(--bs-white);text-shadow: 0px 0px 20px var(--bs-black);">'. $row["brand"].'</h1>
                                </div>
                                <div class="col">
                                    <h1 style="font-size: 40px;color: var(--bs-white);text-shadow: 0px 0px 20px var(--bs-black);">'. $row["COUNT(brand)"].' Cars Avaiable</h1>
                                </div>
                            </div>
                        </div>';
    }
  } else {
    echo "0 results";
  }

  

  


?>