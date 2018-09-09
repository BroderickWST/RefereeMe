<?php
require 'connect.php';

$sql = "SELECT * FROM students;"
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
echo "<h2>Student ", $row[name];

 ?>
