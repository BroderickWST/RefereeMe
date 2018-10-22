<?php
$servername = "localhost";
$username = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=izbsddgh_refereeme", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    $e->getMessage();
    }
?>
