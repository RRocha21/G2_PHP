<?php
    
    $serverName = "localhost";
    $dbUserName = "root";
    $dbPasswordName = "";
    $dbName = "g2_twitch_project";

    $conn = mysqli_connect($serverName, $dbUserName, $dbPasswordName, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        
    }