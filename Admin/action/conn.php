<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "rent_db";

    $conn = mysqli_connect($server, $user, $password, $db);
    if(!$conn){
        die("Failed database Connection" . mysqli_connect_error());
    }

?>