<?php
$server_name = 'localhost';
$user = 'root';
$password = '';
$db = 'world';

$conn = mysqli_connect($server_name, $user, $password, $db);

/* Check connection */
if (mysqli_connect_errno()){
    printf('Connection failed %s', mysqli_connect_errno());
    exit();
}

$sql = 'SELECT* FROM test';

$result = mysqli_query($conn, $sql);

/* associative array */
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
printf('<pre>id is %s , name is %s </pre>', $row['id'], $row['name']);

/* numeric array */
$row = mysqli_fetch_array($result, MYSQLI_NUM);
printf('<pre>id is %s , name is %s</pre>', $row[0], $row[1]);

/* close connection */
mysqli_close($conn);