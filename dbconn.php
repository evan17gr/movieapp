<?php
$dbServerName = "localhost";
$dbUserName = "evan";
$dbPassword = "1999yore";
$dbName = "movies";

$conn = new mysqli($dbServerName,$dbUserName,$dbPassword,$dbName);

if($conn->connect_error){
    echo "Couldn't connect to the database" . $conn->connect_error;
}
