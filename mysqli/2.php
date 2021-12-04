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
$stmt = $conn->prepare($sql);

/* bind varibles to parameters */
$stmt->bind_param('is', $id, $name);

$data = [
    1 => 'Hussein',
    2 => 'Moataz',
    3 => 'Ekram'
];

foreach($data as $id => $name){
    /* execute query */
    $stmt->execute();
}
/* close statement */
$stmt->close();

/* close connection */
$conn->close();