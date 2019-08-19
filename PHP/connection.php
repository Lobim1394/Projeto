<?php

function connection_sql(){
    $servername = "localhost";
    $database = "SNIFFER_WOLF";
    $username = "root";
    $password = "root";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}