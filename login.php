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

    include "php/interface/navbar.php";
    checkLogged();
    ?>
    <!-- Start: Login Form Basic -->
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5" style="margin-top: 29px;">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="font-size: 55px;color: var(--bs-red);">Log in</h2>
                    <p class="w-lg-50"></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center justify-content-xl-center" style="height: 442px;">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: var(--bs-red);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                    </path>
                                </svg></div>
                            <form class="text-center" method="post" onsubmit="return validation()" action="php/login_backend.php" style="width: 80%;">
                            <?php 
                           if(isset($_GET['error'])) {
                            echo '
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                    <span style="font-size: 15px;">
                                       
                                    Username or password is incorrect
                                    </span>
                                </div>
';
                           }
                                ?>
                                <div class="text-start mb-3"><input class="form-control" type="text" id="txtemail" name="email" placeholder="Email" autofocus="" autocomplete="on">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="text-start mb-3"><input class="form-control" type="password" id="txtpass" name="password" placeholder="Password" onkeypress="validation();">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div><!-- Start: Valid Lable -->
                                    <div id='txtpasslbl' class="invalid-feedback">
                                        Must be at least 8 characters 
                                    </div><!-- End: Valid Lable -->
                                </div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-red);border-style: none;">Login</button></div>
                                <a href="password_reset_email.html"><p class="text-end text-muted" style="font-size: 14px;margin-top: -9px;">Forgot
                                    password?</p></a><!-- Start: Horizontal Line -->
                                <div>
                                    <hr>
                                </div><!-- End: Horizontal Line -->
                                <p class="text-center text-muted" style="font-size: 17px;margin-top: -9px;">No Account ?
                                    <a href="register.html">Register</a>&nbsp;
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End: Login Form Basic -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>