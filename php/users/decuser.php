<?php


$dclientids = explode(",", decryption($_COOKIE['UID']));
$uid = $dclientids[0];

$sql = "Select membership from user_accounts where uid = $uid";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $membership_type = $row['membership'];
    if ($membership_type == 'admin') {
        header("location: admin.php");
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
