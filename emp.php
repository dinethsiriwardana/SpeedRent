<?php

include   "php/dbcon.php";
include  "php/encryption.php";
include "landing_page.php";

include "php/users/decuser.php";
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


    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <div class="col-lg-7 col-xl-7 col-xxl-7" style="border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;padding: 9px 12px;padding-top: 10px;padding-bottom: 20px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Info..</h1><!-- Start: User Massege -->
            <div class="container" style="padding-bottom: 3px;padding-top: 5px;">
                <center>
                    <a href="emp_attend.php"> <button class="btn btn-success" type="submit">See Attendence</button> </a>
                    <br>
                    <br>
                    <a href="emp_medical.php"> <button class="btn btn-success" type="submit">Submit a Medical</button></a>
                    <br>
                </center>
            </div><!-- End: User Massege -->
            <!-- Start: See More Button -->
        </div>

        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Employee's Salary</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">

                <?php
                $dclientids = explode(",", decryption($_COOKIE['UID']));
                $uid = $dclientids[0];

                $pay_per_day = 100;

                // Query to fetch attendance data and calculate the total amount by employee and month
                $query = "SELECT MONTH(date) AS month, SUM(attend) AS total_attendance, SUM(attend) * $pay_per_day AS total_amount
          FROM emp_atnd
          WHERE emp_id = $uid
          GROUP BY MONTH(date)";

                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    // Loop through the results
                    while ($row = $result->fetch_assoc()) {


                        echo '  <div class="row" style="margin-bottom: 15px;">

                    
                    <div class="col-4 col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Month</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">' . $row['month'] . '</h4>
                        </div>
                    </div>
                    
                    <div class="col-4 col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">No of Attendance</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">' . $row['total_attendance'] . '</h4>
                        </div>
                    </div>
                    
                    <div class="col-4 col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Total</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">' . $row['total_amount'] . '</h4>
                        </div>
                    </div>
                    
                    
                         </div>';
                    }
                }

                ?>
            </div><!-- End: 1 Row 3 Columns -->
            <!-- Start: See More Button -->
        </div><!-- End: Our Cars - LIst -->

    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <div class="col-lg-7 col-xl-7 col-xxl-7" style="border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;padding: 9px 12px;padding-top: 10px;padding-bottom: 20px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Messages..</h1><!-- Start: User Massege -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <?php
                include "php/users/showmsg.php";
                ?>
            </div><!-- End: User Massege -->
            <!-- Start: See More Button -->
            <div class="container d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-end justify-content-lg-end justify-content-xl-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);"><button class="btn btn-success" type="button">See All Messages</button></div><!-- End: See More Button -->
        </div>
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Send Message..</h1>
            <div class="row">
                <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                    <!-- Start: Search Input (responsive) -->
                    <div class="float-start float-md-end d-xxl-flex justify-content-xxl-start mt-5 mt-md-0 search-area" style="margin-top: 7px;">
                        <h5>Send Message to the admin</h5>
                    </div><!-- End: Search Input (responsive) -->
                </div>
            </div>
            <form action="php/users/sendmsg.php" method="post">
                <input class="form-control" type="text" id="" name="title" placeholder="Title" autocomplete="on">

                <textarea name="msg" style="margin-top: 15px;width: 100%;height: 136px;border-radius: 5px;border-style: solid;border-color: rgba(0,0,0,0.22);"></textarea>
                <div class="container d-flex d-xxl-flex justify-content-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);padding-right: 0px;">
                    <button class="btn btn-success" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">


    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>