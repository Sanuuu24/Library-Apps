<?php

$host = "localhost";
$dbname = "myperpus";
$username = "root";
$password = "akutampan";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection fail: " . $e->getMessage());
}
