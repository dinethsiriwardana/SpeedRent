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
    include "php/encryption.php";

    include "php/interface/navbar_user.php";
    // include "php/admin/show_data.php";
    include "php/dbcon.php";
    ?>
    <!-- End: Navbar Centered Brand -->


    <form method="post" action="php/addcar.php">
        <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;border-radius: 10px;border-style: solid;border-color: rgba(33,37,41,0.21);margin-bottom: 47px;margin-top: 15px;">
            <h1 style="text-align: center;color: var(--bs-red);">Add a Car</h1>
            <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px;padding-top: 10px;border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.16);">
                <div class="col">
                    <div class="row row-cols-xl-2 row-cols-xxl-2">
                        <div class="col-lg-5 col-xl-4 col-xxl-4 d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center" style="border-right-style: solid;border-right-color: rgba(33,37,41,0.3);">
                            <img class="d-flex justify-content-center" src="assets/img/placeholder.png" style="width: 100%;min-width: auto;border-radius: 15px;border: 1px dashed var(--bs-gray-500);margin-bottom: 12px;" width="auto" height="auto" />
                            <input id="fileToUpload" name="fileToUpload" class="form-control" type="file" />
                        </div>
                        <div class="col-lg-7 col-xl-8 col-xxl-8 d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-start align-items-xxl-center">
                            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3" style="width: 100%;margin-bottom: 10px;">
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car Brand</h6>
                                    <input name="car_brand" class="form-control" type="text" style="width: 100%;height: 35px;text-align: right;padding-right: 5px;" placeholder="BMW" />
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class "text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Car Model</h6>
                                    <input name="car_model" class="form-control" type="text" style="width: 100%;height: 35px;text-align: right;padding-right: 5px;" placeholder="X5" />
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Number Plate</h6>
                                    <input name="number_plate" class="form-control" type="text" style="width: 100%;height: 35px;text-align: right;padding-right: 5px;" placeholder="AAA - 1234" />
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3" style="width: 100%;padding-bottom: 10px;">
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Price Per Hour</h6>
                                    <input name="price_per_hour" class="form-control" type="number" style="width: 100%;height: 35px;text-align: right;" value="0.0" required />
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);"># of Seat</h6>
                                    <input name="num_of_seats" class="form-control" type="number" style="width: 100%;height: 35px;text-align: right;" value="2" />
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Ownership</h6>
                                    <div class="row" style="width: 100%;">
                                        <div class="col">
                                            <div class="form-check">
                                                <input name="ownership" class="form-check-input" type="radio" value="0" />
                                                <label class="form-check-label" for="formCheck-2">Our</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input name="ownership" class="form-check-input" type="radio" value="1" />
                                                <label class="form-check-label" for="formCheck-1">Others</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3 visible" style="width: 100%;padding-bottom: 10px;">
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Owners Name</h6>
                                    <input name="owner_name" class="form-control" type="text" style="width: 100%;height: 35px;text-align: right;padding-right: 5px;" placeholder="Owner's Name" />
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Owners ID</h6>
                                    <input name="owner_id" class="form-control" type="text" style="width: 100%;height: 35px;text-align: right;padding-right: 5px;" placeholder="ID No" />
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Owners Tel No</h6>
                                    <input name="owner_tel" class="form-control" type="text" style="width: 100%;height: 35px;text-align: right;padding-right: 5px;" placeholder="Tel No" />
                                </div>
                            </div>
                            <div class="text-end d-lg-flex d-xxl-flex justify-content-lg-end justify-content-xxl-end" style="width: 100%;margin-top: 15px;margin-right: 20px;">
                                <button class="btn btn-success" type="submit" style="background: var(--bs-red);border-style: none;">Add a Car</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;border-radius: 10px;border-style: solid;border-color: rgba(33,37,41,0.21);margin-bottom: 47px;margin-top: 15px;">
        <h1 style="text-align: center;color: var(--bs-red);">All Cars</h1>
        <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px;padding-top: 10px;border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.16);">
            <div class="col">
                <?php
                include "php/admin/show_cars.php";

                ?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>