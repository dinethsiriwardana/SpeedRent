<?php
  function show_msg(){
    include 'dbcon.php';

    $from = 'from_id';
    $to = 2;      //need to get user id here
    $user = 'user_name';
    $msg = 'msg';
    $tbl_accounts = 'user_accounts';
    $tbl_msg = 'msg_table';

    $sql = "SELECT $tbl_accounts.$user, $tbl_msg.$msg FROM $tbl_accounts, $tbl_msg WHERE $tbl_msg.to_id = $to AND $from = $tbl_accounts.uid;";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<b>".$row[$user]. "</b> <br> &nbsp &nbsp &nbsp" . $row[$msg]."<br>";
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
