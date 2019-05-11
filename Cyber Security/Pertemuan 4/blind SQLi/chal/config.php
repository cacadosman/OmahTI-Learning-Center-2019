<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "olc_cysec_blind_sqli";

    $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);