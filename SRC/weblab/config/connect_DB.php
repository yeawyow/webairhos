<?php

    session_start();

    $localhost = "192.168.2.25";
    $username = "yeaw";
    $password = "481725209";
    $dbname = "airoffice";

    $conn = mysqli_connect($localhost, $username, $password, $dbname);

    mysqli_query($conn, "SET NAMES 'utf8'");

    if(!$conn) {
        echo "Error Connected";
    }
