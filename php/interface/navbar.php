<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">
<link rel="stylesheet" href="../../assets/css/styles.min.css">

<div style="background: url(&quot;assets/img/6426002.jpg&quot;) center / cover no-repeat, var(--bs-red);height: 250px;">
    <div></div>
</div><!-- Start: Navbar Centered Brand -->
<nav class="navbar navbar-light navbar-expand-md py-3" style="margin: -5px;margin-right: 20px;margin-left: 21px;margin-top: -36px;margin-bottom: -5px;background: #ffffff;border-color: var(--bs-white);border-radius: 16px;box-shadow: 0px 2px 8px 0px rgba(0,0,0,0.15);">
    <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="index.php">
            <!-- <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: var(--bs-red);">
                <i class="fas fa-car"></i>
            </span>
            <span>SpeedRent</span> -->
            <img src="assets/img/logo.jpg" style="height: 50px;margin: -10px;margin-right: -130px;" />
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-4">
            <ul class="navbar-nav me-auto">
                <!-- <li class="nav-item"><a class="nav-link active" href="cars.php">All Cars</a></li> -->
                <li class="nav-item"><a class="nav-link active" href="/ecom/cars.php">All Cars</a></li>

                <li class="nav-item"><a class="nav-link" href="cars-cat.php">Category</a></li>
            </ul>
            <div class="d-md-none my-2"><button class="btn btn-light me-2" type="button">Button</button><button class="btn btn-primary" type="button">Button</button></div>
        </div>
        <div class="d-none d-md-block">
            <?php
            if (!isset($_COOKIE['UID'])) {

                echo '
              <a class="btn btn-light me-2" role="button" style="background: var(--bs-gray-200);" href="register.php">Register</a>
              <a class="btn btn-primary" role="button" href="login.php" style="background: var(--bs-red);border-style: none;">Login</a></div>';
            } else {
                echo
                '

                <a class="btn btn-light me-2" role="button" style="background: var(--bs-gray-200);" href="user-details.php">Profile</a>
                <a class="btn btn-light me-2" role="button" style="background: var(--bs-gray-200);" href="user.php">Dashboard</a>
                <a class="btn btn-primary" role="button" href="php/logout.php" style="background: var(--bs-red);border-style: none;">Logout</a></div>';
            }
            ?>
        </div>
</nav><!-- End: Navbar Centered Brand -->


<?php
function checkLogged()
{

    if (isset($_COOKIE['UID'])) {

        header("location: ./index.php");
    }
}
// checkLogged();

?>