<?php
    $servername = "mdhsolarteam.se.mysql";
    $username = "mdhsolarteam_se";
    $password = "frJivSDYTj6CVQpDsifapVpd";
    $database = "mdhsolarteam_se";

    // Create connection
    $conn=mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    /*echo "Connected successfully";*/
?>