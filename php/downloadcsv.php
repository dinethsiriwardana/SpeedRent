
<?php 
include 'dbcon.php';

$from = 'from_id';
$msg = 'msg';
$tbl = 'msg_table';

// Create query
$query = "SELECT $from, $msg FROM $tbl";

// Get result
$result = mysqli_query($conn, $query);

// Fetch data
$msgs = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

// Create filename
$filename = 'msg_data_'.date("Y-m-d-h-i-s").'.csv';

// Create output
$output = fopen("php://output", "w");

// Set column headers
fputcsv($output, array('from_id', 'msg'));

// Add result data to csv
foreach ($msgs as $msg) {
    fputcsv($output, $msg);
}

// Set header to download file
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename='.$filename);

// Output file
fpassthru($output);

?>