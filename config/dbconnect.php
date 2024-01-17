<?php
$host = 'db';
$db   = getenv('MYSQL_DATABASE'); 
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

// connect to db using env variables and PDO (PHP Data Objects)
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>