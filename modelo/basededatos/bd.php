<?php

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'cinema';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>