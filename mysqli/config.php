<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$db_name = 'mysqli_example';
$conn = new mysqli($server_name, $username, $password, $db_name);

if (mysqli_connect_errno()){
    printf('Connect failed %s', mysqli_connect_errno());
    exit();
}
return $conn;