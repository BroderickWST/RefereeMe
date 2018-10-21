<?php
require 'connect.php';

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>name</th><th>year</th><th>degree</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

try {
    // set the PDO error mode to exception
    $stmt = $conn->prepare("SELECT stu_id, name, degree FROM students");
    $stmt->execute();
    // echo "Connected successfully";
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRowsX(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
  }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
echo "</table>";
 ?>
