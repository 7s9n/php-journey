<?php
  /**
  * Open a connection via PDO to create a
  * new database and table with structure.
  */
  require_once 'config.php';
  $query = null;
  try {
    $connection = new PDO($dsn , $username , $password , $options);
    $query = file_get_contents('init_database.sql');
    $connection->exec($query);
    echo "Database and table users created successfully.";
  } catch (PDOException $error) {
    echo $query . "<br>" . $error->getMessage();
  }
?>
