<?php

$servername = "localhost";
$username = "userdb";
$password = "databaza";
$dbname = "northwind";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>
