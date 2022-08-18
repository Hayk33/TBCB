<?php

    $hostdb = "localhost";
    $usernamedb = "a8b40a_tbcb352";
    $passworddb = "cc84123aA!";
    $db = "db_a8b40a_tbcb352";

    $conn = mysqli_connect($hostdb, $usernamedb, $passworddb, $db);

    if (!$conn) {
        die("Connect error - " . mysqli_connect_error());
    }

?>
