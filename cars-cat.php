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

<body style="margin-bottom: 36px;">
    <?php
    include "landing_page.php";

    include "php/interface/navbar.php";
    include "php/dbcon.php"
    ?>
    <!-- Start: 1 Row 2 Columns -->
    <div class="container" style="width: 95%;max-width: 95%;">
        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2" style="margin-top: 70px;margin-right: -18px;">
            <!-- Start: <Filter> Item Col -->

            <div class="col-lg-9 col-xl-9 col-xxl-10" style="margin-top: -5px;width: 100%;">
                <div class="container" style="margin-top: 0px;">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 justify-content-between" style="display: flex;margin-right: -12px;margin-top: 8px;margin-bottom: 20px;">
                        <!-- Start: Item Col -->
                        <?php include "php/showCars/showCarCategory.php" ?>
                    </div>
                </div>
            </div><!-- End: <Filter> Item Col -->
        </div>
    </div><!-- End: 1 Row 2 Columns -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>