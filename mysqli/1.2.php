<?php
$server_name = 'localhost';
$user = 'root';
$password = '';
$db = 'world';

/* Tell mysqli to throw an exception if an error occurrs */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect($server_name, $user, $password, $db);

/* Check connection */
if (mysqli_connect_errno()){
    printf('Connection failed %s', mysqli_connect_errno());
    exit();
}

/* Creating table */
mysqli_query($conn, 'CREATE TABLE IF NOT EXISTS test (id int(11),
name TEXT)');


printf(mysqli_affected_rows($conn));

/* Close connection */
mysqli_close($conn);