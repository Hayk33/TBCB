<?php

    $hostdb = "localhost";
    $usernamedb = "root";
    $passworddb = "root";
    $db = "oop_login_register";

    $conn = mysqli_connect($hostdb, $usernamedb, $passworddb, $db);

    if (!$conn) {
        die("Connect error - " . mysqli_connect_error());
    }

?>
