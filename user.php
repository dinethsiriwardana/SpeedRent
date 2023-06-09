<?php
include "php/showmsg.php";
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
    <?php

    include "php/interface/navbar_user.php";
    ?>

    <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;border-radius: 10px;border-style: solid;border-color: rgba(33,37,41,0.21);margin-bottom: 47px;margin-top: 15px;">
        <h1 style="text-align: center;color: var(--bs-red);">My Orders..</h1>
        <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px;padding-top: 10px;">
            <div class="col">


            </div>
        </div>
    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <div class="col-lg-7 col-xl-7 col-xxl-7" style="border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;padding: 9px 12px;padding-top: 10px;padding-bottom: 20px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Messages..</h1><!-- Start: User Massege -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-4 col-xl-3 col-xxl-3 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User ID</h6>
                            <h4 style="font-size: 25px;">10203</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">About</h6>
                            <h4 style="font-size: 25px;">Car Details</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Date</h6>
                            <h4 style="font-size: 25px;">23-03-2023</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-12 col-xl-1 col-xxl-1 d-xl-flex d-xxl-flex align-items-xl-center align-items-xxl-center" style="padding-left: 1px;margin-bottom: -12px;">
                        <div class="d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" style="font-size: 38px;color: var(--bs-red);">
                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                            </svg></div>
                    </div>
                </div>
            </div><!-- End: User Massege -->
            <!-- Start: See More Button -->
            <div class="container d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-end justify-content-lg-end justify-content-xl-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);"><button class="btn btn-success" type="button">See All Messages</button></div><!-- End: See More Button -->
        </div>
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Send Message..</h1>
            <div class="row">
                <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                    <!-- Start: Search Input (responsive) -->
                    <div class="float-start float-md-end d-xxl-flex justify-content-xxl-start mt-5 mt-md-0 search-area" style="margin-top: 7px;"><i class="fas fa-search float-start search-icon"></i><input class="float-start float-sm-end custom-search-input" type="search" placeholder="Type to filter by Username"></div><!-- End: Search Input (responsive) -->
                </div>
            </div><textarea style="margin-top: 15px;width: 100%;height: 136px;border-radius: 5px;border-style: solid;border-color: rgba(0,0,0,0.22);"></textarea><!-- Start: See More Button -->
            <div class="container d-flex d-xxl-flex justify-content-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);padding-right: 0px;"><button class="btn btn-success" type="button">Send Message</button></div><!-- End: See More Button -->
        </div>
    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <!-- Start: Our Cars - No Cars -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;height: 225.5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Cars..</h1>
            <div class="container d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-end" style="height: 98px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-192 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 56px;color: var(--bs-gray-500);">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M64 352c17.69 0 32-14.32 32-31.1V64.01c0-17.67-14.31-32.01-32-32.01S32 46.34 32 64.01v255.1C32 337.7 46.31 352 64 352zM64 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S86.09 400 64 400z"></path>
                </svg></div>
            <div class="container d-xl-flex d-xxl-flex justify-content-xl-center justify-content-xxl-center"><small style="color: var(--bs-gray-500);">No Cars</small></div>
        </div><!-- End: Our Cars - No Cars -->
        <!-- Start: Our Cars - No Cars -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;height: 225.5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Messages..</h1>

            <!-- <?php
                    // show_msg();
                    ?> -->
        </div><!-- End: Our Cars - No Cars -->
    </div>
    <div class="row" style="border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;padding-top: 10px;">
        <!-- Start: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Users..</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-4 col-xxl-2 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User ID</h6>
                            <h4 style="font-size: 25px;">10234</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-6 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Name</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">&nbsp;Dineth Siriwardhana</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3 col-xxl-3 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Income</h6>
                            <h4 style="font-size: 25px;">$150.00</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-1 col-xxl-1 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center align-items-xxl-center" style="padding-left: 1px;margin-bottom: -12px;">
                        <div class="d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" style="font-size: 38px;color: var(--bs-red);">
                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                            </svg></div>
                    </div>
                </div>
            </div><!-- End: 1 Row 3 Columns -->
            <!-- Start: See More Button -->
            <div class="container d-flex d-xxl-flex justify-content-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);"><a class="btn btn-success" role="button" href="admin-cars.html">See All Cars</a></div><!-- End: See More Button -->
        </div><!-- End: Our Cars - LIst -->
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>