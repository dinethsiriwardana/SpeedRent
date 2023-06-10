<?php
include "SendSMS.php";
$phnno = "0768808901";
$msg = "Hi \n\nWelcome to Speed Rent! Your account is set up. Start renting now and enjoy our services.\n\nHappy renting! - Speed Rent";
sendSMS($phnno, $msg);
