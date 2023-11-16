<?php



$sql = "SELECT CONCAT(fname, ' ', lname) AS full_name, uid FROM user_accounts WHERE usertype = 'emp';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {


        echo '  <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-4 col-xxl-2 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">User ID</h6>
                            <h4 style="font-size: 25px;">' . $row['uid'] . '</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-xxl-6 d-xxl-flex align-items-xxl-center">
                        <div>
                            <h6 class="text-muted mb-2" style="font-size: 15px;color: rgba(0,0,0,0.25);">Name</h6>
                            <h4 class="text-truncate" style="font-size: 25px;">' . $row['full_name'] . '</h4>
                        </div>
                    </div>
                 
                    <div class="col-md-4 col-xl-1 col-xxl-1 d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center align-items-xxl-center" style="padding-left: 1px;margin-bottom: -12px;">
                        <div class="d-flex justify-content-center">
                         <a href = "php/admin/deleteuser.php?uid=' . $row['uid'] . '">
                            <svg class="bi bi-trash-fill" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 38px;color: var(--bs-red);">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>';
    }
}
