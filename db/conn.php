<?php 

$host = "localhost";
$name = "test-update";
$user = "root";
$pass = "";
$dsn = "mysql:host=$host;dbname=$name";

try {

    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::EXCEPTION_ERRMODE);

} catch (PDOException $e) {

    echo 'There was an error while connecting to the database: ' . $e->getMessage();

}


?>