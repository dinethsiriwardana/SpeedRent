<?php


include "dbcon.php";

// Step 2: Execute the query
$pay_per_day = 100;
// Query to fetch attendance data and calculate the total amount by employee and month
$query = "SELECT emp_id, MONTH(date) AS month, SUM(attend) AS total_attendance, SUM(attend) * $pay_per_day AS total_amount
          FROM emp_atnd
          GROUP BY emp_id, MONTH(date)";
$result = mysqli_query($conn, $query);

// Step 3: Fetch the rows and store them in an array
$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Step 4: Write the CSV data into a file
$filename = 'emp_salary.csv';
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
