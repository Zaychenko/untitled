<?php
$servername = "localhost";
$username = "root";
$password = "root";

//$conn = new mysqli($servername, $username, $password);
//
//if ($conn->connect_error){
//    die("Connection failed: ". $conn->connect_error);
//}echo "Connection successfully";
try {
    $conn = new PDO("mysql:host = $servername; dbname = jbdc", $username, $password);
    echo "Соединение установлено";
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>



















