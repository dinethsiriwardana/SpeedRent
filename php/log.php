<?php
$logFile = 'php/logfile.json'; // Replace with the desired path and filename for your log file

// Log message function
function logMessage($filename, $message)
{
    global $logFile;

    $log = array();

    // Check if the log file exists
    if (file_exists($logFile)) {
        // Read the existing log file and decode its contents
        $log = json_decode(file_get_contents($logFile), true);
    }

    // Add the new message to the log array
    $log[] = array(
        'filename' => $filename,
        'timestamp' => time(),
        'message' => $message
    );

    // Encode the log array as JSON
    $logJson = json_encode($log, JSON_PRETTY_PRINT);

    // Write the JSON to the log file
    file_put_contents($logFile, $logJson);
}
