<?php
include "php/log.php";
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
    <link rel="stylesheet" href="assets/css/animate.min.min.css">
</head>

<body style="margin-bottom: 36px;">

    <?php include "php/interface/navbar.php"; ?>
    <div class="container" style="margin-top: 70px;"></div><!-- Start: 1 Row 2 Columns -->
    <div class="container" style="width: 95%;max-width: 95%;">
        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2" style="margin-top: 70px;margin-right: -18px;">
            <!-- Start: Filter <item> Col -->
            <div class="col-lg-3 col-xl-3 col-xxl-2">

                <form action="cars.php" method="get">
                    <div style="border-radius: 10px;box-shadow: 0px 0px 14px 0px rgba(33,37,41,0.04);border-style: solid;border-color: var(--bs-gray-200);padding-right: 20px;padding-left: 20px;color: rgba(33,37,41,0.8);padding-bottom: 22px;margin-bottom: 50px;">
                        <h1 style="text-align: center;font-size: 30px;margin-top: 30px;color: var(--bs-red);">Filters</h1>
                        <hr>
                        <div class="col">
                            <small style="font-size: 25px;">Brand</small>
                            <div class="form-check" style="margin-bottom: 5px;margin-top: 20px;">
                                <input class="form-check-input" type="checkbox" id="formCheck-1" name="brand[]" value="Audi">
                                <label class="form-check-label" for="formCheck-1">Audi</label>
                            </div>
                            <div class="form-check" style="margin-bottom: 5px;">
                                <input class="form-check-input" type="checkbox" id="formCheck-4" name="brand[]" value="Toyota">
                                <label class="form-check-label" for="formCheck-4">Toyota</label>
                            </div>
                            <div class="form-check" style="margin-bottom: 5px;">
                                <input class="form-check-input" type="checkbox" id="formCheck-3" name="brand[]" value="BMW">
                                <label class="form-check-label" for="formCheck-3">BMW</label>
                            </div>
                            <div class="form-check" style="margin-bottom: 5px;">
                                <input class="form-check-input" type="checkbox" id="formCheck-2" name="brand[]" value="Mercedes-Benz">
                                <label class="form-check-label" for="formCheck-2">Mercedes-Benz</label>
                            </div>
                        </div>
                        <hr>
                        <div class="col">
                            <small style="font-size: 25px;">Price</small>
                        </div>
                        <div class="col">
                            <input class="form-control-sm" type="number" name="maxprice" min="0" step="10" placeholder="Max " style="width: 100%;height: 37px;border-color: rgba(0,0,0,0.13);border-radius: 5px;margin-top: 10px;margin-left: 0px;">
                            <input class="form-control-sm" type="number" name="minprice" min="0" step="10" placeholder="Min " style="width: 100%;height: 37px;border-color: rgba(0,0,0,0.13);border-radius: 5px;margin-top: 20px;margin-right: 18px;">
                            <button class="btn btn-primary" style="background: var(--bs-red);border-style: none;margin-top: 15px;width: 100%;">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- </div> -->
            <!-- End: Filter <item> Col -->

            <!-- Start: <Filter> Item Col -->
            <div class="col-lg-9 col-xl-9 col-xxl-10" style="margin-top: -5px;">
                <div class="container" style="margin-top: 0px;">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 justify-content-between" style="display: flex;margin-right: -12px;margin-top: 8px;margin-bottom: 20px;">

                        <!-- Start: Item Col -->
                        <?php include "php/showCars/showcars.php" ?>;
                    </div>
                </div>
            </div><!-- End: <Filter> Item Col -->
        </div>
    </div>
    </div><!-- End: 1 Row 2 Columns -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>