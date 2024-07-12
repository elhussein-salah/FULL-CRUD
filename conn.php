<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "todos";

    $dsn = "mysql:host=$host;dbname=$db";

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: ". $e->getMessage();
    }
