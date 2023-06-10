<?php
  function show_msg(){
    include 'dbcon.php';

    $from = 'from_id';
    $to = 2;      //need to get user id here
    $user = 'user_name';
    $msg = 'msg';
    $tbl_accounts = 'user_accounts';
    $tbl_msg = 'msg_table';

    $sql = "SELECT * FROM $tbl_msg WHERE to_id = $to";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo '
        <div class="row" style="margin-bottom: 15px;">
        <div class="col-md-4 col-xl-3 col-xxl-3 d-xxl-flex align-items-xxl-center">
            <div>
                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User ID</h6>
                <h4 style="font-size: 25px;">'.$row['from_id'].'</h4>
            </div>
        </div>
        <div class="col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
            <div>
                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">About</h6>
                <h4 style="font-size: 25px;">'.$row['title'].'</h4>
            </div>
        </div>
        <div class="col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
            <div>
                <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Date</h6>
                <h4 style="font-size: 25px;">23-03-2023</h4>
            </div>
        </div>
        <div class="col-md-4 col-lg-12 col-xl-1 col-xxl-1 d-xl-flex d-xxl-flex align-items-xl-center align-items-xxl-center" style="padding-left: 1px;margin-bottom: -12px;">
            <div class="d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" style="font-size: 38px;color: var(--bs-red);">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                </svg></div>
        </div>
    </div>
        ';
      }
    } else {
      echo'
      <div class="container d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-end" style="height: 98px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-192 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 56px;color: var(--bs-gray-500);">
        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
        <path d="M64 352c17.69 0 32-14.32 32-31.1V64.01c0-17.67-14.31-32.01-32-32.01S32 46.34 32 64.01v255.1C32 337.7 46.31 352 64 352zM64 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S86.09 400 64 400z"></path>
      </svg></div>
      <div class="container d-flex d-xxl-flex justify-content-center justify-content-xxl-center"><small style="color: var(--bs-gray-500);">No Messages</small></div>';
    }

    $conn->close();
  }
  ?>
