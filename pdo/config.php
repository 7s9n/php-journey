<?php
  /**
  * Configuration for database connection
  */
  $host = '127.0.0.1';
  $username = 'root';
  $password = '';
  $dbname = 'test';
  $port = 3306;
  $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
  $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
?>
