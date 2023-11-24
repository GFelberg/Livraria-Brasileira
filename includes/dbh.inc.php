<?php

$dsn = "mysql:host=localhost;dbname=livrariabrasileira";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE);
} catch (PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}
