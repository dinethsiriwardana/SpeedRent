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


    $dclientids = explode(",", decryption($_COOKIE['UID']));
    $uid = $dclientids[0];

    $sql = "SELECT date, attend FROM emp_atnd WHERE emp_id = " . $uid . " AND date BETWEEN '2023-10-01' AND '2023-10-31'";

    $result = mysqli_query($conn, $sql);
    ?>
    <br>
    <h1 style="text-align: center;color: var(--bs-red);">Attendance</h1>



    <div class="container d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="padding-top: 30px;padding-bottom: 30px;width: 68%;border-radius: 10px;border: 1px solid rgba(33,37,41,0.46);margin-top: 66px;">
        <form class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="width: 90%;">


            <div class="row" style="width: 95%; padding-bottom: 15px;">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['date'] . "</td>";
                                    echo "<td>" . $row['attend'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </form>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>