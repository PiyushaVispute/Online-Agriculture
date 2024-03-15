<?php

    $host = "localhost";
    $userName = "root";
    $password = " ";
    $database = "agroculture";

    $con = mysqli_connect($host, $userName, $password, $database);
    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
