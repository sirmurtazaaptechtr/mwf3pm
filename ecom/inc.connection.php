<?php

    require('inc.function.php');
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "ecommerce";
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if ($conn) {
        echo "$database is Connected successfully";
    }