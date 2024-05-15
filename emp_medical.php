<?php
// include "php/showmsg.php";
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
    include "php/encryption.php";

    include "php/interface/navbar_user.php";
    include "php/dbcon.php";
    include "php/SendSMS.php";

    ?>
    <br>


    <div class="container" style="padding: 15px; padding-top: 15px; width: 95%; max-width: 100%; padding-right: 25px; padding-left: 25px; border-radius: 10px; border-style: solid; border-color: rgba(33, 37, 41, 0.21); margin-bottom: 47px; margin-top: 15px;">
        <h1 style="text-align: center; color: var(--bs-red);">Submit Medical Information</h1>
        <form action="php/emp/submitmedi.php" method="POST">
            <input type="hidden" name="emp_id" value="1"> <!-- Replace with the actual employee ID -->
            <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px; padding-top: 10px; border-bottom-style: solid; border-bottom-color: rgba(33, 37, 41, 0.16);">
                <div class="col">
                    <div class="row row-cols-xl-2 row-cols-xxl-2">
                        <!-- Add an input field for the medical reason -->
                        <div class="col-lg-10 col-xl-10 col-xxl-10 d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center">
                            <h6 class="text-muted mb-2" style="font-size: 15px; color: rgba(0, 0, 0, 0.25);">Medical Reason</h6>
                            <input name="reason" class="form-control" type="text" style="width: 100%; height: 35px; text-align: right; padding-right: 5px;" placeholder="Enter the medical reason" required />
                        </div>
                        <!-- Add an input field for the date -->
                        <div class="col-lg-2 col-xl-2 col-xxl-2 d-lg-flex d-xl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center">
                            <h6 class="text-muted mb-2" style="font-size: 15px; color: rgba(0, 0, 0, 0.25);">Date</h6>
                            <input name="date" class="form-control" type="date" style="width: 100%; height: 35px; text-align: right;" required />
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end d-lg-flex d-xxl-flex justify-content-lg-end justify-content-xxl-end" style="width: 100%; margin-top: 15px; margin-right: 20px;">
                <button class="btn btn-success" type="submit" style="background: var(--bs-red); border-style: none;">Submit Medical Information</button>
            </div>
        </form>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>