<?php
$server_name = 'localhost';
$user = 'root';
$password = '';
$db = 'world';

$conn = new mysqli($server_name, $user, $password, $db);

/* Check connection */
if (mysqli_connect_errno()){
    printf('Connection failed %s', mysqli_connect_errno());
    exit();
}

$sql = 'SELECT* FROM test';

$result = $conn->query($sql);

/* associative array */
$row = $result->fetch_array(MYSQLI_ASSOC);
printf('<pre>id is %s , name is %s </pre>', $row['id'], $row['name']);

/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
printf('<pre>id is %s , name is %s</pre>', $row[0], $row[1]);

/* close connection */
$conn->close();