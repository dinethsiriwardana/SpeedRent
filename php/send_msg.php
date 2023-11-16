<?php
include 'dbcon.php';

include "encryption.php";


$title = $_POST["title"];
$msg = $_POST["msg"];
// Assuming you have these variables defined elsewhere, for example, through user authentication.
$from_id = $loggedInUserId; // The ID of the sender.

$dclientids = explode(",", decryption($_COOKIE['UID']));
$uid = $dclientids[0];
$to_id = 1; // The ID of the recipient.

// You may want to validate and sanitize user input here.

// SQL query to insert data into the msg_table
$sql = "INSERT INTO msg_table (msg_type, msg, seen, from_id, to_id, title)
            VALUES ('Info', ?, 0, ?, ?, ?)";

// Create a prepared statement
$stmt = $conn->prepare($sql);

// Bind parameters and execute the statement
$stmt->bind_param("siss", $msg, $from_id, $to_id, $title);
$stmt->execute();

// Close the prepared statement
$stmt->close();
