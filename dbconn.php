<?php
$dbServerName = "localhost";
$dbUserName = "";
$dbPassword = "";
$dbName = "movies";

$conn = new mysqli($dbServerName,$dbUserName,$dbPassword,$dbName);

if($conn->connect_error){
    echo "Couldn't connect to the database" . $conn->connect_error;
}
