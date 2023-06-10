<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E comm</title>
    <link rel="icon" type="image/png" sizes="64x64"
        href="assets/img/Screenshot%202023-02-08%20at%2011-33-24%20E%20comm.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<?php


   include "php/interface/navbar.php" ;
   ?>
    <!-- Start: Login Form Basic -->
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5" style="margin-top: 29px;">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="font-size: 55px;color: var(--bs-red);">Register</h2>
                    <p class="w-lg-50"></p>
                </div>
            </div>
        </div><!-- Start: Multi step form -->
        <section>
            <div class="d-xl-flex flex-column justify-content-xl-center multisteps-form" id="progress-bar-button">
                <div class="d-xl-flex justify-content-center justify-content-xl-center row"
                    style="padding-top: 15px;margin-bottom: -30px;">
                    <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                        <div class="multisteps-form__progress"><a class="btn multisteps-form__progress-btn js-active"
                                role="button" id="btnuserinfo" title="User Info" style="color: var(--bs-red);">User
                                Info</a><a class="btn multisteps-form__progress-btn" role="button" id="btnabout"
                                title="User Info" style="color: var(--bs-red);">About</a></div>
                    </div>
                </div>
            </div>
            <div id="multple-step-form-n" class="container overflow-hidden"
                style="margin-top: 0px;margin-bottom: 10px;padding-bottom: 427px;padding-top: 57px;">
                <div id="multistep-start-row" class="row" style="border-style: none;">
                    <div id="multistep-start-column" class="col-12 col-lg-8 m-auto">

                        <form id="main-form" class="multisteps-form__form"  action="php/register_backend.php" method="post">
                            <div id="single-form-1" class="multisteps-form__panel p-4 rounded bg-white js-active"
                                data-animation="scaleIn" style="border-style: solid;border-color: var(--bs-gray-400);">
                                <h3 class="text-center multisteps-form__title" style="color: var(--bs-red);">Login Info
                                </h3>
                                <div id="form-content" class="multisteps-form__content">
                                    <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-center form-row mt-4"
                                        id="input-grp-double">
                                        <div class="col-12 col-sm-6" style="margin-bottom: 15px;">
                                            <input
                                                class="form-control multisteps-form__input" type="text" id="txtemail"
                                                placeholder="Email" name="email">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6" style="margin-bottom: 15px;">
                                            <input class="form-control multisteps-form__input" type="text" placeholder="User Name" name="username" id = "uname" onchange="checkUsername(this.value)">
                                        </div> 
                                        <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="margin-bottom: 15px;"><input
                                                class="form-control multisteps-form__input" type="password" id="txtpass"
                                                placeholder="Password" name="password"><!-- Start: Valid Lable -->
                                            <div id='txtpasslbl' class="invalid-feedback">
                                                Must be at least 8 characters </div><!-- End: Valid Lable -->
                                        </div>
                                        <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="margin-bottom: 15px;"><input
                                                class="form-control multisteps-form__input" type="password" id="txtpassagn"
                                                placeholder="Password Again" name="passwordagn"
                                                onkeypress="validation();">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div><!-- Start: Valid Lable -->
                                            <div id='txtpasslbl' class="invalid-feedback">
                                                Please make sure your passwords match.
                                             </div><!-- End: Valid Lable -->
                                        </div>
                                    </div>
                                    <div class="d-xl-flex justify-content-xl-end button-row d-flex mt-4"
                                        id="next-button"><button class="btn btn btn-primary ml-auto js-btn-next"
                                            id="btn-next" type="button" title="Next"
                                            style="width: 100px;background: var(--bs-red);border-style: none;">Next</button>
                                    </div>
                                </div>
                            </div>
                            <div id="single-form-next-prev" class="multisteps-form__panel p-4 rounded bg-white"
                                data-animation="scaleIn" style="border-style: solid;border-color: var(--bs-gray-400);">
                                <h3 class="text-center multisteps-form__title">About</h3><!-- Start: 1 Row 2 Columns -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6"><input class="form-control multisteps-form__input"
                                                type="text" placeholder="First name " name ="fname"></div>
                                        <div class="col-md-6"><input class="form-control multisteps-form__input"
                                                type="text" placeholder="Last name " name ="lname"></div>
                                    </div>
                                </div><!-- End: 1 Row 2 Columns -->
                                <div id="input-grp-single-1" class="form-row mt-4">
                                    <div class="col-12">
                                        <!-- Start: 1 Row 1 Column -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12"><input
                                                        class="form-control multisteps-form__input" type="text"
                                                        placeholder="Address" name="address"></div>
                                            </div>
                                        </div><!-- End: 1 Row 1 Column -->
                                    </div>
                                </div>
                                <div id="input-grp-single-3" class="form-row mt-4">
                                    <div class="col-12">
                                        <!-- Start: 1 Row 1 Column -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6"><input
                                                        class="form-control multisteps-form__input" type="text"
                                                        placeholder="ID Number" name="idno"></div>
                                                <div class="col-md-6"><input
                                                        class="form-control multisteps-form__input" type="text"
                                                        placeholder="Phone No" name="phonenum"></div>
                                            </div>
                                        </div><!-- End: 1 Row 1 Column -->
                                    </div>
                                </div>
                                <div id="form-content-1" class="multisteps-form__content">
                                    <div class="d-xl-flex justify-content-xl-center button-row d-flex mt-4"
                                        id="next-prev-buttons">
                                        <!-- Start: 1 Row 2 Columns -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                  <button 
                                                        class="btn btn btn-primary ml-auto js-btn-next" id="btnprev" type="button" 
                                                    title="Next" style="width: 100px;background: var(--bs-red);border-style: none;">
                                                      Prev
                                                  </button>
                                                 </div>
                                                <div class="col-md-6 d-xl-flex justify-content-xl-end">
                                                  <button class="btn btn btn-primary ml-auto js-btn-next" 
                                                    type="submit" title="Next" onsubmit="checkpwds()" 
                                                    style="width: 100px;background: var(--bs-red);border-style: none;">
                                                        Register
                                                  </button>
                                                </div>
                                              
                                            </div>
                                        </div><!-- End: 1 Row 2 Columns -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End: Multi step form -->
    </section><!-- End: Login Form Basic -->

    
<script>
function checkUsername(username) {
  if (username.includes(' ')) {
    // Username contains spaces
    alert('Username should not contain spaces.');
    // You can perform additional error handling or take appropriate action here
    cnfrmpwd.classList.remove('is-invalid');
        cnfrmpwd.classList.add('is-valid');
  } else {
    // Username is valid
    console.log('Username is valid.');
    // You can proceed with further processing or validation
  }
}
</script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/validate_reset_pwd.js"></script>

</body>

</html>