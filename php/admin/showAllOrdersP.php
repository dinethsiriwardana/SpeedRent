<?php



$sql = "SELECT *  FROM rent_order where  stts = 'Pending'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px;padding-top: 10px;border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.16);">
    
    <div class="col">
                <div class="row row-cols-xl-2 row-cols-xxl-2">
                    <div class="col-lg-5 col-xl-4 col-xxl-4 d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center" style="border-right-style: solid;border-right-color: rgba(33,37,41,0.3);">
                        <img class="d-flex justify-content-center" src="assets/cars/' . $row["carid"] . '.jpg" style="width: 100%;min-width: auto;" width="auto" height="auto">
                    </div>
                    <div class="col-lg-7 col-xl-8 col-xxl-8 d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-start align-items-xxl-center">
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Order No</h6>
                                <h4 style="font-size: 25px;">' . $row["orderid"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car No</h6>
                                <h4 style="font-size: 25px;">' . $row["carid"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User No</h6>
                                <h4 style="font-size: 25px;">' . $row["uid"] . '</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Cost</h6>
                                <h4 style="font-size: 25px;">$' . $row["price"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Payment</h6>
                                <h4 style="font-size: 25px;">' . $row["payment"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Pick Up</h6>
                                <h4 style="font-size: 25px;">' . ($row["pickup_type"] == 1 ? 'Yes' : 'No')  . '</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col-lg-5 col-xl-4 col-xxl-5 d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Date</h6>
                                <h4 style="font-size: 25px;">' . ($row["date_from"] == $row["date_to"] ? $row["date_from"] : (' From: ' . $row["date_from"] . ' To: ' . $row["date_from"])) . '</h4>

                            </div>
                            <div class="col d-flex d-xl-flex flex-column align-items-center justify-content-xl-end align-items-xl-start align-items-xxl-center" style="padding-bottom: -1px;">
                                <div class="row d-xl-flex d-xxl-flex justify-content-xl-end align-items-xxl-center" style="width: 100%;">
                                    <div class="col-lg-12 col-xl-8 col-xxl-8">
                                            <a class="btn btn-primary" role="button" href="php/admin/acceptorder.php?orderid=' . $row['orderid'] . '&uid=' . $row["uid"] . '&date_from=' . $row["date_from"] . '" style="background: var(--bs-red);border-style: none;margin-top: 15px;width: 49%;">Accept</a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ';
    }
} else {
    echo "0 results";
}

// $conn->close();
