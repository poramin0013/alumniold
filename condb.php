<?php
session_start();
$servername = "localhost";
$username = "root";
$db_name = "alumniold";
$password = "12345678";
try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$db_name, $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>