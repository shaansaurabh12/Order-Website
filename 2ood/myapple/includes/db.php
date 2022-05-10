<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "databases";
$dbName = "apple";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Connection Failed ----- > : " . mysqli_connect_error());
}
