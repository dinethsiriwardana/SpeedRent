<?php
    include 'dbcon.php';

    $sql = "SELECT , firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    

