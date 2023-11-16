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
    // include "php/interface/navbar_user.php";
    // include "php/admin/show_data.php";
    include "php/dbcon.php";
    include "php/SendSMS.php";

    ?>

    <?php
    include "./php/encryption.php";

    $dclientids = explode(",", decryption($_COOKIE['UID']));
    $uid = $dclientids[0];

    $select = "*";
    $table = "user_accounts";

    $sql = "SELECT $select FROM $table WHERE uid = $uid";

    $result = $conn->query($sql);

    $userData = array(); // Initialize an empty array
    // echo $userData;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userData = $row; // Assign the fetched row data to the array
        }
    }



    ?>

    <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;border-radius: 10px;border-style: solid;border-color: rgba(33,37,41,0.21);margin-bottom: 47px;margin-top: 15px;">
        <h1 style="text-align: center;color: var(--bs-red);">User Panel...</h1>

        <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px;padding-top: 10px;">
            <form action="php/users/update-User.php" method="post">
                <div class="col">
                    <div class="row row-cols-xl-2 row-cols-xxl-2">
                        <div class="col-lg-7 col-xl-8 col-xxl-8 d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-start align-items-xxl-center" style="width: 100%;">
                            <div class="row" style="width: 100%;">
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-end">
                                    <h6 class="text-muted mb-2" style="font-size: 20px;color: rgba(0,0,0,0.25);"></h6>
                                </div>
                            </div>
                            <div class="row" style="width: 100%;padding-top: 20px;">
                                <br>

                                <?php
                                if (isset($_GET['error'])) {
                                    echo '<h5 style="text-align: left;color: var(--bs-red);" >Error updating details.....</h5>';
                                }
                                ?>
                                <br>
                                <br>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">

                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User name</h6><input type="text" value="<?php echo $userData['user_name'] ?>" class="form-control" placeholder="User Name" name="username" disabled>
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User Email</h6><input type="text" value="<?php echo $userData['email'] ?>" class="form-control" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="row" style="width: 100%;padding-top: 20px;">
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">First Name</h6><input type="text" value="<?php echo $userData['fname'] ?>" class="form-control" placeholder="First Name" name="firstname" required>
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Last Name</h6><input type="text" value="<?php echo $userData['lname'] ?>" class="form-control" placeholder="Last Name" name="lastname" required>
                                </div>
                            </div>
                            <div class="row" style="width: 100%;padding-top: 20px;">
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Address</h6><input type="text" value="<?php echo $userData['address'] ?>" class="form-control" placeholder="Address" name="address" required>
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Phone No</h6><input type="text" value="<?php echo $userData['phoneNo'] ?>" class="form-control" placeholder="Phone No" name="phoneNo" required>
                                </div>
                            </div>
                            <div class="row" style="width: 100%;padding-top: 20px;">
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                    <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Id No</h6><input type="text" value="<?php echo $userData['idno'] ?>" class="form-control" placeholder="Id Number" name="idNo" required>
                                </div>
                                <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start"></div>
                            </div>
                            <div class="text-end d-lg-flex d-xxl-flex justify-content-lg-end justify-content-xxl-end" style="width: 100%;margin-top: 15px;margin-right: 20px;">
                                <button class="btn btn-success" type="submit" style="background: var(--bs-red);border-style: none;">Update..</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>