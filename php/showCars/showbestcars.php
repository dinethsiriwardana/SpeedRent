<?php


$sql = "SELECT * FROM car_table ORDER BY price DESC limit 3";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

        echo '
            <div class="col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/cars/' . $row["carid"] . '.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">' . $row["car_brand"] . " " . $row["car_model"] . '</a></h2>
                                </div>
                            </div>
                            <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="product-description">
                                    ' . $row["description"] . '
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                                            <a class="btn btn-primary" role="button" href="car-order.php?carid=' . $row['carid'] . '" style="background: var(--bs-red);border-style: none;margin-top: 15px;width: 49%;">Rent</a>

                                        </div>
                                        <div class="col-6">
                                            <p class="product-price">$' . $row["price"] . ' </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
    }
}
