<?php
//Creates a connection to the database. This code is 'included' into another file, as if it is pasted into the other file.

$dsn = "mysql:host=localhost;dbname=Uwkvfc44_portfolio;charset=utf8mb4";
try {
$connect = new PDO($dsn, 'Uwkvfc44_akamjot', '@akamjot12');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>
