<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'database_users';
    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
        die('conexión fallida: '.$e->getMessage());
    }
?>