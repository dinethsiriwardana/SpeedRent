<?php

// $path = "./php/";
// include $path . "dbcon.php";
// include $path . "encryption.php";

$select = "*";
$table = "rent_order";


$dclientids = explode(",", decryption($_COOKIE['UID']));
$uid = $dclientids[0];


$sql = "SELECT * FROM rent_order,car_table WHERE rent_order.uid = $uid and rent_order.carid = car_table.carid  order by date_from";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo '<div class="row row-cols-xl-2 row-cols-xxl-2" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.16);">
                        <div class="col-lg-5 col-xl-4 col-xxl-4 d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start justify-content-xxl-start align-items-xxl-center" style="border-right-style: solid;border-right-color: rgba(33,37,41,0.3);">
                <div class="row" style="width: 100%;">
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 20px;color: rgba(0,0,0,0.25);">Order #' . $row['orderid'] . '</h6>
                    </div>
                </div><img class="d-flex justify-content-center" src="assets/cars/' . $row['carid'] . '.jpg" style="width: 100%;min-width: auto;" width="auto" height="auto">
            </div>
            <div class="col-lg-7 col-xl-8 col-xxl-8 d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-start align-items-xxl-center">
                <div class="row" style="width: 100%;">
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-end">
                        <h6 class="text-muted mb-2" style="font-size: 20px;color: rgba(0,0,0,0.25);">Placed on #&nbsp; ' . $row['submit_date'] . '</h6>
                    </div>
                </div>
                <div class="row" style="width: 100%;">
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car Band</h6>
                        <h4 style="font-size: 25px;">' . $row['car_brand'] . '</h4>
                    </div>
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car Model</h6>
                        <h4 style="font-size: 25px;">' . $row['car_model'] . '</h4>
                    </div>
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Number Plate</h6>
                        <h4 style="font-size: 25px;">' . $row['number_plate'] . '</h4>
                    </div>
                </div>
                <div class="row" style="width: 100%;">
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);"># of Seat</h6>
                        <h4 style="font-size: 25px;">' . $row['noofseat'] . '</h4>
                    </div>
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Collect</h6>
                        <h4 style="font-size: 25px;">' . ($row['pickup_type'] == 0 ? 'Deliver' : 'Pickup') . '</h4>
                    </div>
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Return</h6>
                        <h4 style="font-size: 25px;">' . ($row['return_type'] == 0 ? 'Deliver' : 'Pickup') . '</h4>
                    </div>
                </div>
                <div class="row" style="width: 100%;">
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">From</h6>
                        <h4 style="font-size: 25px;">' . $row['date_from'] . '</h4>
                    </div>
                    <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                        <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">To</h6>
                        <h4 style="font-size: 25px;">' . $row['date_to'] . '</h4>
                    </div>
                </div>
                <div class="text-end d-lg-flex d-xxl-flex justify-content-lg-end justify-content-xxl-end" style="width: 100%;margin-top: 15px;margin-right: 20px;">
                <div class="col-2">
                <a class="btn btn-primary" role="button" href="php/users/deleteorder.php?orderid=' . $row['orderid'] . '" style="background: var(--bs-red);border-style: none;margin-top: 15px;width: 49%;">Cancel</a>

                </div>   
        
                </div>
            </div>
        </div>
        <br>';
    }
}
