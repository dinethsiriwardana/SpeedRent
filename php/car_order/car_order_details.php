<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function compareArrays($arr1, $arr2)
{
    $difference = [];

    foreach ($arr1 as $value) {
        if (!in_array($value, $arr2)) {
            $difference[] = $value;
        }
    }

    return $difference;
}

function setSelectbox(){

    include "../dbcon.php";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    date_default_timezone_set("Asia/Colombo");
    $todayDate =  (date('Y-m-d'));
    $getdatearray = [];
    
    $sql = "SELECT * FROM rent_order WHERE date_from >= '$todayDate' AND carid = 30001";
    $result = $conn->query($sql);
    var_dump($result);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            if ($row['date_to'] == "") {
                array_push($getdatearray, $row['date_from']);
            } else {
                $start = new DateTime($row['date_from']);
                $end = new DateTime($row['date_to']);

                $interval = new DateInterval('P1D');

                $dates = new DatePeriod($start, $interval, $end);

                foreach ($dates as $date) {

                    array_push($getdatearray, date_format($date, 'Y-m-d'));
                }
                array_push($getdatearray, $row['date_to']);
            }
        }
    }

    $nextdatearray = [];
    $date = date_create(date('Y-m-d'));
    for ($i = 0; $i < 15; $i++) {
        date_add($date, date_interval_create_from_date_string("1 days"));
        $nextDate =  date_format($date, "Y-m-d");
        array_push($nextdatearray, $nextDate);
    }

    $differenceArray = compareArrays($nextdatearray, $getdatearray);


    foreach ($differenceArray as $value) {
        echo "<option value = '$value'>$value</option>";
    }
}
setSelectbox();

?>