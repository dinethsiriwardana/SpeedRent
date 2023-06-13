<?php



$tbl = 'car_table';

$sql = "SELECT * FROM $tbl limit 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
         <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-4"><img src="assets/cars/' . $row["carid"] . '.jpg" style="width: 100%;"></div>
                    <div class="col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car</h6>
                            <h4 style="font-size: 25px;">' . $row['car_brand'] . '</h4>
                            <h4 style="font-size: 25px;">' . $row['car_model'] . '</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-4 d-xl-flex d-xxl-flex justify-content-xl-end justify-content-xxl-end align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Cost per day</h6>
                            <h4 style="font-size: 25px;">$' . $row['price'] . '</h4>
                        </div>
                    </div>
                </div>
        ';
    }
} else {
    echo "0 results";
}
