  <div class="container" style="padding: 15px;padding-top: 15px;width: 95%;max-width: 100%;padding-right: 25px;padding-left: 25px;">
      <div class="row gy-2 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4">
          <div class="col">
              <div class="card" style="border-radius: 15px;box-shadow: 0px 0px 3px rgba(13,110,253,0.4), inset 0px 0px 4px rgba(13,110,253,0.4);border: 1px solid var(--bs-blue);">
                  <div class="card-body" style="height: auto;padding-top: 20px;padding-bottom: 20px;padding-right: 25px;padding-left: 25px;">
                      <div class="row">
                          <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                              <h6 class="text-muted mb-2">Total our</h6>
                              <h4>Cars</h4>
                          </div>
                          <div class="col-xl-6 col-xxl-7 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                              <h4 style="font-size: 35px;"><?php ourcars() ?></h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card" style="border-radius: 15px;border: 1px solid var(--bs-red);box-shadow: 0px 0px 3px rgba(220,53,69,0.39), inset 0px 0px 4px #dc354564;">
                  <div class="card-body" style="height: auto;padding-top: 20px;padding-bottom: 20px;padding-right: 25px;padding-left: 25px;">
                      <div class="row">
                          <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                              <h6 class="text-muted mb-2">Total other</h6>
                              <h4>Cars</h4>
                          </div>
                          <div class="col-xl-6 col-xxl-7 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                              <h4 style="font-size: 35px;"><?php othercars() ?></h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card" style="border-radius: 15px;box-shadow: 0px 0px 3px rgba(255,193,7,0.4), inset 0px 0px 4px rgba(255,193,7,0.4);border: 1px solid var(--bs-yellow);">
                  <div class="card-body" style="height: auto;padding-top: 20px;padding-bottom: 20px;padding-right: 25px;padding-left: 25px;">
                      <div class="row">
                          <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                              <h6 class="text-muted mb-2">Total</h6>
                              <h4>Orders</h4>
                          </div>
                          <div class="col-xl-6 col-xxl-7 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                              <h4 style="font-size: 35px;"><?php totalorders() ?></h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card" style="border-radius: 15px;box-shadow: 0px 0px 3px rgba(32,201,151,0.4), inset 0px 0px 4px rgba(32,201,151,0.4);border: 1px solid var(--bs-teal);">
                  <div class="card-body" style="height: auto;padding-top: 20px;padding-bottom: 20px;padding-right: 25px;padding-left: 25px;">
                      <div class="row">
                          <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-start">
                              <h6 class="text-muted mb-2">Total</h6>
                              <h4>Users</h4>
                          </div>
                          <div class="col-xl-6 col-xxl-7 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                              <h4 style="font-size: 35px;"><?php totalusers() ?></h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php


    function ourcars()
    {


        include "php/dbcon.php";
        $sql = "SELECT COUNT(*) AS num_cars FROM car_table where ownership = 1";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo $row['num_cars'];
            }
        }
    }
    function othercars()
    {
        include "php/dbcon.php";
        $sql = "SELECT COUNT(*) AS num_cars FROM car_table where ownership = 0";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo $row['num_cars'];
            }
        }
    }


    //get total user count 
    function totalusers()
    {
        include "php/dbcon.php";
        $sql = "SELECT COUNT(*) AS num_users FROM user_accounts";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo $row['num_users'];
            }
        }
    }
    //get total user count 
    function totalorders()
    {
        include "php/dbcon.php";
        $sql = "SELECT COUNT(*) AS num_orders FROM rent_order";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo $row['num_orders'];
            }
        }
    }
