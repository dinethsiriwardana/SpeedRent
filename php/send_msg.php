<?php
    include 'dbcon.php';

    $mType = 'info';
    $reMsId = 2;
    $msgT = 'nothing';
    $mSeen = 0;
    $fromId = 1;
    $toId = 2;

    $sql = "INSERT INTO msg_table (msg_type, reply_msg_id, msg, seen, from_id, to_id)
        VALUES ('$mType', '$reMsId', '$msgT', '$mSeen', '$fromId', '$toId')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>