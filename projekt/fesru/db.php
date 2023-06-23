<?php
$host = 'localhost';
$dbName = 'fesru';
$username = 'root';
$password = 'qwerty123!';
$mysqli = new mysqli($host, $username, $password, $dbName);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
