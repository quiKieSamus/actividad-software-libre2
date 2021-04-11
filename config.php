<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "dbactividad";
$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
try{
    $conn;
} catch(PDOException $e){
    die('connection fail: '.$e->getMessage());
}

?>