<?php

$host = 'localhost';
$db = 'kuis_pemweb2';
$username = 'root'; 
$password = ''; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

?>