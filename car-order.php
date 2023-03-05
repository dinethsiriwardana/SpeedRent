<?php
include "php/dbcon.php" ;
// include "php/dbcon.php" ;
// include "php/car_order/car_order_details.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E comm</title>
    <link rel="icon" type="image/png" sizes="64x64" href="assets/img/Screenshot%202023-02-08%20at%2011-33-24%20E%20comm.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">

</head>

<body>
    <!-- Start: Navbar Centered Brand -->
  <?php
  include "php/interface/navbar_user.php" ;
  ?>
    <h1 style="text-align: center;color: var(--bs-red);margin-top: 0pc;padding-top: 50px;padding-bottom: 50px;">Rent
        Now...</h1>
    <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;border-radius: 10px;border-style: solid;border-color: rgba(33,37,41,0.21);margin-bottom: 47px;margin-top: 15px;">
        <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px;padding-top: 10px;border-style: none;border-bottom-color: rgba(33,37,41,0.16);">
            <div class="col">
                <div class="row row-cols-xl-2 row-cols-xxl-2">
                    <div class="col-lg-5 col-xl-5 col-xxl-6 d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start justify-content-xxl-start align-items-xxl-start" style="border-right-style: solid;border-right-color: rgba(33,37,41,0.3);">
                        <h1 style="text-align: center;color: var(--bs-red);padding-left: 30px;">BMW M3&nbsp;</h1><img class="d-flex justify-content-center" src="assets/img/0502da25d3a9640ad861574a516a4611.png" style="width: 100%;min-width: auto;" width="auto" height="auto">
                    </div>
                    <div class="col-lg-7 col-xl-7 col-xxl-6 d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-start align-items-xxl-center">
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car Band
                                </h6>
                                <h4 style="font-size: 25px;">BMW</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car Model
                                </h6>
                                <h4 style="font-size: 25px;">M3</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Year</h6>
                                <h4 style="font-size: 25px;">2021</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Number
                                    Plate</h6>
                                <h4 style="font-size: 25px;">ABC - XXXX</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);"># of Seat
                                </h6>
                                <h4 style="font-size: 25px;">5</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Price per
                                    Day</h6>
                                <h4 style="font-size: 42px;color: var(--bs-red);">$100.00</h4>
                            </div>
                        </div>
                        <h4 style="font-size: 35px;color: var(--bs-red);padding-top: 50px;padding-bottom: 15px;">Details
                        </h4>
                        <div class="row" style="width: 100%;padding-bottom: 20px;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">From&nbsp;
                                </h6>
                                <select style="height: 35px;padding-left: 5px;width: 100%;">
                                    <optgroup label="This is a group" id="fromDate">

                               
                                 
                                    </optgroup>
                                </select>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="orderformoredayscheckbox" name="moredays">
                                    <label class="form-check-label" for="formCheck-1">
                                        <span style="color: rgb(108, 117, 125);">Two or More Days</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-start align-items-xl-start justify-content-xxl-start visible" >
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">To</h6>
                                <select style="width: 100%;height: 35px;padding-left: 5px;" id="orderformoredays" disabled>
                                    <optgroup label="This is a group" id="toDate">
                                      
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;padding-bottom: 20px;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Collect
                                </h6><select style="width: 100%;height: 35px;padding-left: 5px;">
                                    <optgroup label="Select">
                                        <option value="pickup">Pick Up</option>
                                        <option value="delever">Delever</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Return</h6>
                                <select style="width: 100%;height: 35px;padding-left: 5px;">
                                    <optgroup label="Select">
                                        <option value="pickup">Pick Up</option>
                                        <option value="delever">Delever</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;padding-bottom: 20px;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start align-items-xxl-end">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Total</h6>
                                <h4 style="font-size: 42px;color: var(--bs-red);">$100.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex d-xl-flex justify-content-end align-items-center justify-content-xl-end align-items-xxl-start" style="padding-top: 0px;"><a class="btn btn-success d-xxl-flex justify-content-xxl-center align-items-xxl-center" role="button" href="admin-orders.html" style="background: var(--bs-red);border-style: none;border-bottom-style: none;width: 130.9141px;height: 45px;border-radius: 10px;">Rent
                Now</a></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/script.min.js"></script> -->
    <script src="php/car_order/getData.js"></script>
    <script>
        const checkbox = document.getElementById('orderformoredayscheckbox');
        const select = document.getElementById('orderformoredays');
        select.disabled; 

        checkbox.addEventListener('change', function() {
            select.disabled = !checkbox.checked;
        });
       
    </script>
</body>

</html>