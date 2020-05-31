<?php
$host = "localhost";
$db_name = "ShopDB";
$username = "root";
$password = "root";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>