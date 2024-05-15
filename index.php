<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E comm</title>
    <link rel="icon" type="image/png" sizes="64x64" href="assets/img/Screenshot%202023-02-08%20at%2011-33-24%20E%20comm.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="border-style: none;border-color: white;">
    <?php
    // include "landing_page.php";

    include "php/interface/navbar.php";
    include "php/dbcon.php"
    ?>
    <div class="container">
        <h1 class="text-center" style="margin-top: 23px;">Our Latest ....</h1>
    </div><!-- Start: Pretty Product List -->
    <div class="row product-list" style="margin-left: 40px;margin-right: 40px;">

        <?php
        include "php/showCars/showbestcars.php";
        // include "php/admin/"
        ?>
    </div><!-- End: Pretty Product List -->
    <!-- Start: Banner Heading Image -->
    <section class="py-4 py-xl-5">
        <!-- Start: 1 Row 2 Columns -->
        <div class="container">
            <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-white p-4 p-md-5" style="background: var(--bs-red);">
                            <h2 class="fw-bold text-white mb-3">We Have&nbsp;loyalty Offers For Our Valuable Customers</h2>
                            <p class="mb-4"></p>
                            <h1 style="font-size: 33px;">50% Off Starting </h1>
                            <h1 style="font-size: 33px;">Second Day Of</h1>
                            <h1 style="font-size: 33px;">Your Rent</h1><!-- Start: Font Awesome List with Icons -->
                            <ul class="list-unstyled fa-ul"></ul><!-- End: Font Awesome List with Icons -->
                            <div class="my-3">
                                <a class="btn btn-primary btn-lg me-2" role="button" href="cars.php" style="background: var(--bs-white);color: var(--bs-red);border-style: none;">Rent Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;height: 410.539px;"><img class="w-100 h-100 fit-cover" src="assets/img/0000.jpg"></div>
                </div>
            </div>
        </div><!-- End: 1 Row 2 Columns -->
    </section><!-- End: Banner Heading Image -->
    <h1 class="text-center" style="margin-top: 50px;">We Have....</h1><!-- Start: Stats -->
    <div class="container py-4 py-xl-5" style="margin-top: 20px;">
        <div class="row gy-4 row-cols-2 row-cols-md-4">
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="background: var(--bs-red);"><i class="fas fa-car-alt"></i></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">123+</h2>
                        <p class="mb-0">Cars</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="background: var(--bs-red);"><i class="fas fa-users"></i></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">45+</h2>
                        <p class="mb-0">Users</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="background: var(--bs-red);"><i class="fas fa-user-tie"></i></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">67+</h2>
                        <p class="mb-0">Employees<br></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg" style="background: var(--bs-red);"><i class="fas fa-clipboard-check"></i></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">89</h2>
                        <p class="mb-0">Rents</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Stats -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>