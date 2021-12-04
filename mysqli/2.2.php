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

$sql = 'INSERT INTO test (id, name) VALUES(?, ?)';

/* prepare an insert statement */
$stmt = mysqli_prepare($conn, $sql);

/* bind varibles to parameters */
mysqli_stmt_bind_param($stmt, 'is', $id, $name);

$data = [
    1 => 'Hussein',
    2 => 'Moataz',
    3 => 'Ekram'
];

foreach($data as $id => $name){
    /* execute query */
    mysqli_stmt_execute($stmt);

    printf('Affected rows %s', mysqli_affected_rows($conn));
}

/* close statement */
mysqli_stmt_close($stmt);

/* close connection */
mysqli_close($conn);