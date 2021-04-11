<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "dbactividad";

try{
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
} catch(PDOException $e){
    die('connection fail: '.$e->getMessage());
}

?>