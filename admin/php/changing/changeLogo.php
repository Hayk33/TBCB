<?php

    if (empty($_POST['submit']) && empty($_FILES['logo'])) {
        header('location: ./../../index.php');
    }
    if (file_exists('./../../../img/logoBlack.png')) {
        unlink('./../../../img/logoBlack.png');
    }
    if (file_exists('./../../../img/logoWhite.png')) {
        unlink('./../../../img/logoWhite.png');
    }
    $file = $_FILES["logo"];
    $fileTmp = $file["tmp_name"];

    $fileName = 'logoBlack.png';
    $destinationFile = '../../../img/' . $fileName;
    move_uploaded_file($fileTmp, $destinationFile);

    $fileName2 = 'logoWhite.png';
    $destinationFile = '../../../img/' . $fileName2;
    move_uploaded_file($fileTmp, $destinationFile);

    header("location: ./../../home.php");
