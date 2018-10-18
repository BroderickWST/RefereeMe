<?php
$servername = "localhost";
$username = "izbsddgh_user";
$password = "HelloWorld!";

try {
    $conn = new PDO("mysql:host=$servername;dbname=izbsddgh_refereeme", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    $e->getMessage();
    }
?>
