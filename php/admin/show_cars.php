<?php



$tbl = 'car_table';

$sql = "SELECT * FROM $tbl";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
       

                 <div class="row row-cols-xl-2 row-cols-xxl-2">
                    <div class="col-lg-5 col-xl-4 col-xxl-4 d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center" style="border-right-style: solid;border-right-color: rgba(33,37,41,0.3);">
                    <img class="d-flex justify-content-center" src="assets/cars/' . $row["carid"] . '.jpg" style="width: 100%;min-width: auto; opacity: ' . ($row["availability"] == 1 ? "1" : "0.5") . ';" width="auto" height="auto">
                    </div>
                    <div class="col-lg-7 col-xl-8 col-xxl-8 d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-start align-items-xxl-center">
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car Band</h6>
                                <h4 style="font-size: 25px;">' . $row["car_brand"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car Model</h6>
                                <h4 style="font-size: 25px;">' . $row["car_model"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Number Plate</h6>
                                <h4 style="font-size: 25px;">' . $row["number_plate"] . '</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Cost per day</h6>
                                <h4 style="font-size: 25px;">$' . $row["price"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);"># of Seat</h6>
                                <h4 style="font-size: 25px;">' . $row["noofseat"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Ownership</h6>
                                <h4 style="font-size: 25px;">' . ($row["ownership"] == 1 ? 'Our' : 'Other') . '</h4>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Owners Name</h6>
                                <h4 style="font-size: 25px;">' . $row["owner_name"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Owners ID</h6>
                                <h4 style="font-size: 25px;">' . $row["owner_id"] . '</h4>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Owners Tel No</h6>
                                <h4 style="font-size: 25px;">' . $row["owner_tel"] . '</h4>
                            </div>
                        </div>
                        <div class="text-end d-lg-flex d-xxl-flex justify-content-lg-end justify-content-xxl-end" style="width: 100%;margin-top: 15px;margin-right: 20px;">
                            <div class="col-xxl-7 d-flex d-xl-flex flex-column align-items-center justify-content-xl-end align-items-xl-start align-items-xxl-center" style="padding-bottom: 0px;padding-right: 53px;">
                                <div class="row d-xl-flex d-xxl-flex justify-content-xl-end align-items-xxl-end" style="width: 100%;">
                                    <form action="php/changeCarStatus.php?carid=' . $row["carid"] . '" method="post">
                                        <div class="col-lg-12 col-xl-8 col-xxl-8">
                                            <div class="input-group">
                                                <select id="inputGroupSelect04" class="form-select" name="avl">
                                                    <option value="avaiable">Avaiable</option>
                                                    <option value="navaiable">Not avaiable</option>
                                                </select>

                                                <button class="btn btn-primary" type="submit" style="background: var(--bs-red);">Save Data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <button class="btn btn-success" type="button" style="background: var(--bs-red);border-style: none;">Edit Details</button> -->
                        </div>
                    </div>
                </div>
        ';
    }
} else {
    echo "0 results";
}

$conn->close();
