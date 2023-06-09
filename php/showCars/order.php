<?php
    include "./php/dbcon.php";

    

    $sql="SELECT carid,car_brand,car_model,price,availability from car_table ORDER BY car_model ASC";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {

      echo '  <div class="col-6" data-bss-hover-animate="pulse" style="box-shadow: 0px 0px 6px rgba(33,37,41,0.12);padding: 30px;padding-right: 30px;padding-left: 20px;padding-top: 30px;padding-bottom: 30px;border-radius: 10px;margin: 0;width: 49%;border: 1.5px solid var(--bs-gray-200);margin-bottom: 20px;">
      <div class="row">
          <div class="col-xl-12 col-xxl-8">
              <h1 class="text-start" style="font-size: 175%;color: var(--bs-red);">'. $row['car_brand'] .$row['car_model']. $row['price']. $row['availability'].' Vits - 2020</h1>
          </div>
          <div class="col-xl-12 col-xxl-4"><small class="d-xl-flex justify-content-xl-end" style="font-size: 23px;color: rgba(33,37,41,0.64);">4.5/5.0</small><small class="d-xl-flex justify-content-xl-end align-items-xl-center" style="font-size: 15px;margin-top: -12px;color: rgba(33,37,41,0.52);"></small></div>
      </div>
      <div class="row">
          <div class="col-xxl-5" style="width: 50%;"><img src="assets/img/2500611.webp" width="80%" style="width: 100%;"></div>
          <div class="col-xxl-5" style="width: 50%;"><small class="d-xl-flex justify-content-xl-end" style="font-size: 30px;">$50.00</small><small class="d-xl-flex justify-content-xl-end align-items-xl-center" style="font-size: 15px;margin-top: -12px;color: rgba(33,37,41,0.52);">per day</small>
              <p style="margin-bottom: 0px;text-align: right;">Fuel Type - Petrol<br>No. of Seats - 5</p>
              <div class="row">
                  <div class="col d-xxl-flex justify-content-xxl-end" style="padding-right: 3px;"><button class="btn btn-primary" style="background: var(--bs-red);border-style: none;margin-top: 15px;width: 49%;">Rent</button></div>
              </div>
          </div>
      </div>
  </div> ';
          //  echo "CarId: " . $row["carid"]. " Car_Brand: " . $row["car_brand"]. " Car Model: " . $row["car_model"]. " Car Price: " .$row["price"]. "Car avilability: ".$row["availability"]. "<br>";
    }
} 
else 
{
  echo "0 results";
}

?>