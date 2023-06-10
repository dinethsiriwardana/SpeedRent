
<?php

$logFile = 'php/logfile.json'; // Replace with the desired path and filename for your log file

$log = json_decode(file_get_contents($logFile), true);
foreach ($log as $entry) {
    $filename = $entry['filename'];
    $timestamp = date('Y-m-d H:i:s', $entry['timestamp']);
    $message = $entry['message'];
    echo "[$timestamp] $filename: $message<br>";
}

?>