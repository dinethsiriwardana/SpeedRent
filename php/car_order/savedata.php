<?php



// function SelectDates(){
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
// echo "dssds";
include "../dbcon.php";
date_default_timezone_set("Asia/Colombo");
$todayDate =  (date('Y-m-d'));
$todayMonth =  intval(date('m'));
$todayYear =  intval(date('Y'));


$getdatearray = [];


$sql = "SELECT * FROM rent_order 
    WHERE date_from >= '$todayDate' AND carid = 30001
    ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        if ($row['date_to'] == "") {
            array_push($getdatearray, $row['date_from']);
        } else {
            $start = new DateTime($row['date_from']);
            $end = new DateTime($row['date_to']);

            // Create a DateInterval object representing a one day interval
            $interval = new DateInterval('P1D');

            // Create a DatePeriod object that generates a sequence of dates
            // from the start date to the end date with the one day interval
            $dates = new DatePeriod($start, $interval, $end);

            // Convert the DatePeriod object to an array of dates
            // $date_array = [];
            foreach ($dates as $date) {
                
                array_push($getdatearray, date_format($date,'Y-m-d'));
            }
            array_push($getdatearray,$row['date_to']);
        }
    }
}
// print_r( $getdatearray);

$nextdatearray = [];
$date = date_create(date('Y-m-d'));
for ($i = 0; $i < 15; $i++) {
    date_add($date, date_interval_create_from_date_string("1 days"));
    $nextDate =  date_format($date, "Y-m-d");
    array_push($nextdatearray, $nextDate);
}
// echo "<br>";
// print_r($nextdatearray);
// echo "<br>";
$differenceArray = compareArrays($nextdatearray, $getdatearray);
// print_r( $differenceArray
// );

foreach ($differenceArray as $value) {
    echo "<option value = '$value'>$value</option>";
}

return 0;

// }
// SelectDates();

?>