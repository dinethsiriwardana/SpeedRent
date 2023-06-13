<?php

include "dbcon.php";

// Step 2: Execute the query
$query = "SELECT * FROM rent_order";
$result = mysqli_query($conn, $query);

// Step 3: Fetch the rows and store them in an array
$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Step 4: Write the CSV data into a file
$filename = 'rent_order.csv';
$file = fopen($filename, 'w');

// Write the column headers
$headers = array_keys($rows[0]);
fputcsv($file, $headers);

// Write the data rows
foreach ($rows as $row) {
    fputcsv($file, $row);
}

fclose($file);

// Step 5: Set headers for file download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// Step 6: Output the file contents
readfile($filename);

// Step 7: Delete the temporary file
unlink($filename);

// Step 8: Close the database connection
// mysqli_close($conn);
