<?php
$servername = "localhost"; // Change this to your MySQL server hostname
$user = "root"; // Change this to your MySQL username
$pw = ""; // Change this to your MySQL password
$database = "db_tru"; // Change this to the name of your database

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $user, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}