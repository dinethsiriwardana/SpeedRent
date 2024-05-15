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
    include "php/admin/show_data.php";
    include "php/dbcon.php";
    include "php/SendSMS.php";

    ?>

    <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;border-radius: 10px;border-style: solid;border-color: rgba(33,37,41,0.21);margin-bottom: 47px;margin-top: 15px;">
        <h1 style="text-align: center;color: var(--bs-red);">All Orders</h1>

        <div class="row d-xxl-flex justify-content-xxl-end">
            <div class="col d-xxl-flex justify-content-xxl-end"><a class="btn btn-success" role="button" href="php/downloadcsv.php">Download Orders</a></div>
        </div>
        <?php
        include "php/admin/showAllOrdersLimited.php";
        ?>
        <div class="col d-flex d-xl-flex justify-content-end align-items-center justify-content-xl-end align-items-xxl-center" style="padding-top: 20px;"><a class="btn btn-success" role="button" href="admin-orders.php">See More</a></div>
    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <!-- Start: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Cars..</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <?php
                include "php/admin/show_carsl.php";
                ?>
            </div><!-- End: 1 Row 3 Columns -->
            <!-- Start: See More Button -->
            <div class="container d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-end justify-content-lg-end justify-content-xl-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);"><a class="btn btn-success" role="button" href="admin-cars.php">See All Cars</a></div><!-- End: See More Button -->
        </div><!-- End: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Messages..</h1><!-- Start: User Massege -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <?php
                include "php/admin/showmsg.php";
                ?>
            </div>

            <div class="container d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-end justify-content-lg-end justify-content-xl-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);">

                <button class="btn btn-success" type="button" onclick="window.location.href='admin-msg.php'">See All Messages</button>
            </div><!-- End: See More Button -->
        </div>
    </div>

    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <!-- Start: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Users..</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <?php
                include "php/admin/show_users.php";
                ?>
            </div><!-- End: 1 Row 3 Columns -->
            <!-- Start: See More Button -->
        </div><!-- End: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;margin-bottom: 12px;">Send Message..</h1>
            <div class="row">
                <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                    <!-- Start: Search Input (responsive) -->
                    <div class="float-start float-md-end d-xxl-flex justify-content-xxl-start mt-5 mt-md-0 search-area" style="margin-top: 7px;">
                        <h5>Send Message to a User</h5>
                    </div><!-- End: Search Input (responsive) -->
                </div>
            </div>
            <form action="php/admin/sendmsg.php" method="post">
                <input class="form-control" type="text" id="" name="uid" placeholder="User Id" autocomplete="on">
                <br>
                <input class="form-control" type="text" id="" name="title" placeholder="title" autocomplete="on">

                <textarea name="msg" style="margin-top: 15px;width: 100%;height: 136px;border-radius: 5px;border-style: solid;border-color: rgba(0,0,0,0.22);"></textarea>
                <div class="container d-flex d-xxl-flex justify-content-end justify-content-xxl-end" style="padding-bottom: 3px;padding-top: 15px;border-bottom-style: none;border-bottom-color: rgba(33,37,41,0.21);padding-right: 0px;">
                    <button class="btn btn-success" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row" style="margin-right: 35px;margin-left: 35px;margin-bottom: 30px;">
        <!-- Start: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Employees..</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <?php
                include "php/admin/show_emp.php";
                ?>
            </div><!-- End: 1 Row 3 Columns -->
            <!-- Start: See More Button -->
        </div><!-- End: Our Cars - LIst -->
        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Employee's Medical</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <?php


                $sql = "SELECT * FROM medical_table";

                $result = mysqli_query($conn, $sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {


                        echo '  <div class="row" style="margin-bottom: 15px;">

                    <div class="col-2 col-md-2 col-xxl-2 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User ID</h6>
                            <h4 style="font-size: 25px;">' . $row['emp_id'] . '</h4>
                        </div>
                    </div>
                    <div class="col-2 col-md-4 col-xxl-5 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Reason</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">' . $row['reason'] . '</h4>
                        </div>
                    </div>
                    <div class="col-2 col-md-4 col-xxl-5 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Date</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">' . $row['date'] . '</h4>
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
        <!-- Start: Our Cars - LIst -->

        <div class="col" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 15px;padding-left: 15px;border-style: solid;border-color: rgba(33,37,41,0.21);border-radius: 10px;margin: 5px;">
            <h1 style="text-align: center;color: var(--bs-red);font-size: 30px;">Employee's Salary</h1><!-- Start: 1 Row 3 Columns -->
            <div class="container" style="border-bottom-style: solid;border-bottom-color: rgba(33,37,41,0.21);padding-bottom: 3px;padding-top: 5px;">
                <div class="row d-xxl-flex justify-content-xxl-end">
                    <div class="col d-xxl-flex justify-content-xxl-end"><a class="btn btn-success" role="button" href="php/downloadsalary.php">Download Salary</a></div>
                </div>
                <?php


                $pay_per_day = 100;

                // Query to fetch attendance data and calculate the total amount by employee and month
                $query = "SELECT emp_id, MONTH(date) AS month, SUM(attend) AS total_attendance, SUM(attend) * $pay_per_day AS total_amount
          FROM emp_atnd
          GROUP BY emp_id, MONTH(date)";

                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    // Loop through the results
                    while ($row = $result->fetch_assoc()) {


                        echo '  <div class="row" style="margin-bottom: 15px;">

                    <div class="col-2 col-md-2 col-xxl-2 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User ID</h6>
                            <h4 style="font-size: 25px;">' . $row['emp_id'] . '</h4>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-xxl-3 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Month</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">' . $row['month'] . '</h4>
                        </div>
                    </div>
                    
                    <div class="col-2 col-md-3 col-xxl-3 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">No of Attendance</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">' . $row['total_attendance'] . '</h4>
                        </div>
                    </div>
                    
                    <div class="col-2 col-md-3 col-xxl-3 d-xxl-flex align-items-xxl-center">
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>