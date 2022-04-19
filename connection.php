<?php

    $host = "sql202.epizy.com";
    $username = "epiz_30833591";
    $password = "363s16BydSiwdL";
    $dbname = "epiz_30833591_Trinity_Cafe_assignment"

    // Creating databse connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    if(!$con) {
        die("Connection Error" . mysqli_connect_error());
    }

?>