<?php


// $path = "../";
// include $path . "dbcon.php";
// include $path . "encryption.php";

$dclientids = explode(",", decryption($_COOKIE['UID']));
$uid = $dclientids[0];

$where = '';

if (isset($_GET['msgid'])) {
    $msgid = $_GET['msgid'];
    $where = " ORDER BY msgid = $msgid DESC";
}

$tbl_msg = 'msg_table';

$sql = "SELECT * FROM $tbl_msg WHERE to_id = $uid $where";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $show =  (isset($_GET['msgid']) && ($row['msgid']) ==  ($_GET['msgid'])) ?  "show" : "";
        echo '
        
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-4 col-xxl-3 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Msg ID</h6>
                            <h4 style="font-size: 25px;">' . $row['msgid'] . '</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">About</h6>
                            <h4 style="font-size: 25px;">' . $row['title'] . '</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-4 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Date</h6>
                            <h4 style="font-size: 25px;">' . $row['datetime_column'] . '</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-1 d-xxl-flex align-items-xxl-center"
                        style="padding-left: 1px;margin-bottom: -12px;">
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-arrow-down-circle-fill"
                                style="font-size: 38px;color: var(--bs-green);" data-bs-toggle="collapse"
                                href="#collapseExample' . $row['msgid'] . '" role="button" aria-expanded="false"
                                aria-controls="collapseExample' . $row['msgid'] . '">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z">
                                </path>
                            </svg>
                            <a href="php/users/deletemsg.php?msgid=' . $row['msgid'] . '">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                height="1em" fill="currentColor"
                                style="font-size: 38px;color: var(--bs-red);margin-left: 15px;"
                                data-bs-toggle="collapse" href="/php/users/deletemsg.php?msgid = ' . $row['msgid'] . '" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                </path>
                            </svg>
                            </a>
                            </div>
                    </div>
                </div>
                <div id="collapseExample' . $row['msgid'] . '" class="collapse ' . $show . '" >
                    <div class="card" style="border-radius: 17px;">
                        <div class="card-body" style="padding-top: 20px;padding-bottom: 20px;">
                            <h4 class="card-title">Admin</h4>
                            <p class="card-text">' . $row['msg'] . '</p>
                        </div>
                    </div>
                </div>
                <br>
        ';
    }
} else {
    echo '
      <div class="container d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-end" style="height: 98px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-192 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 56px;color: var(--bs-gray-500);">
        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
        <path d="M64 352c17.69 0 32-14.32 32-31.1V64.01c0-17.67-14.31-32.01-32-32.01S32 46.34 32 64.01v255.1C32 337.7 46.31 352 64 352zM64 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S86.09 400 64 400z"></path>
      </svg></div>
      <div class="container d-flex d-xxl-flex justify-content-center justify-content-xxl-center"><small style="color: var(--bs-gray-500);">No Messages</small></div>';
}
