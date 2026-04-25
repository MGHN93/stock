<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'stock' ;

$db = new mysqli($hostname, $username, $password, $database);
echo "database connected successfully";

?>

