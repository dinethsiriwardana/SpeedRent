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
        include "php/encryption.php";

        $dclientids = explode(",", decryption($_COOKIE['UID']));
        $uid = $dclientids[0];

        include "php/dbcon.php";

        $select = "*";
        $table = "user_accounts";
    
        $sql = "SELECT $select FROM $table WHERE uid = $uid";

        $result = $conn->query($sql);
    
        $userData = array(); // Initialize an empty array
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $userData = $row; // Assign the fetched row data to the array
            }
        }



    ?>
    <!-- Start: Navbar Centered Brand -->
    <nav class="navbar navbar-light navbar-expand-md py-3" style="margin: 10px;margin-right: 10px;margin-left: 10px;margin-top: 16px;margin-bottom: 20px;background: #ffffff;border-color: var(--bs-white);border-radius: 16px;box-shadow: 0px 2px 8px 0px rgba(0,0,0,0.15);">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="index.html"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: var(--bs-red);"><i class="fas fa-car"></i></span><span>SpeedRent</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-4">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">All Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Category</a></li>
                </ul>
                <div class="d-md-none my-2"><button class="btn btn-light me-2" type="button">Button</button><button class="btn btn-primary" type="button">Button</button></div>
            </div>
            <div class="d-none d-md-block"><button class="btn btn-light me-2" type="button" style="background: var(--bs-gray-200);">Register</button><a class="btn btn-primary" role="button" href="#" style="background: var(--bs-red);border-style: none;">Login</a></div>
        </div>
    </nav><!-- End: Navbar Centered Brand -->
    <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;border-radius: 10px;border-style: solid;border-color: rgba(33,37,41,0.21);margin-bottom: 47px;margin-top: 15px;">
        <h1 style="text-align: center;color: var(--bs-red);">User Panel...</h1>
        <div class="row d-xxl-flex align-items-xxl-center" style="padding-bottom: 15px;padding-top: 10px;">
            <div class="col">
                <div class="row row-cols-xl-2 row-cols-xxl-2">
                    <div class="col-lg-7 col-xl-8 col-xxl-8 d-lg-flex d-xl-flex flex-column align-items-lg-center justify-content-xl-center align-items-xl-start align-items-xxl-center" style="width: 100%;">
                        <div class="row" style="width: 100%;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-end">
                                <h6 class="text-muted mb-2" style="font-size: 20px;color: rgba(0,0,0,0.25);"></h6>
                            </div>
                        </div>
                        <div class="row" style="width: 100%;padding-top: 20px;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User name</h6><input type="text" value="<?php echo $userData['user_name'] ?>" class="form-control" placeholder="User Name" name="username">
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User Email</h6><input type="text" value="<?php echo $userData['email'] ?>" class="form-control" placeholder="User Name" name="username">
                            </div>
                        </div>
                        <div class="row" style="width: 100%;padding-top: 20px;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">First Name</h6><input type="text" value="<?php echo $userData['fname'] ?>" class="form-control" placeholder="User Name" name="username">
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Last Name</h6><input type="text" value="<?php echo $userData['lname'] ?>" class="form-control" placeholder="User Name" name="username">
                            </div>
                        </div>
                        <div class="row" style="width: 100%;padding-top: 20px;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Address</h6><input type="text" value="<?php echo $userData['address'] ?>" class="form-control" placeholder="User Name" name="username">
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Phone No</h6><input type="text" value="<?php echo $userData['phoneNo'] ?>" class="form-control" placeholder="User Name" name="username">
                            </div>
                        </div>
                        <div class="row" style="width: 100%;padding-top: 20px;">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Id No</h6><input type="text" value="<?php echo $userData['idno'] ?>" class="form-control" placeholder="User Name" name="username">
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start"></div>
                        </div>
                        <div class="text-end d-lg-flex d-xxl-flex justify-content-lg-end justify-content-xxl-end" style="width: 100%;margin-top: 15px;margin-right: 20px;"><button class="btn btn-success" type="button" style="background: var(--bs-red);border-style: none;">Update..</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>