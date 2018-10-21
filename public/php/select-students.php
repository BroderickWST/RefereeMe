<?php
require 'connect.php';

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Student ID</th><th>Lecturer ID</th><th>Position</th><th>Company</th><th>Job Location</th></tr>";

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

  $stmt = $conn->prepare("SELECT stu_id, lecturer_id, position, company, job_location FROM reference");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v)
    {
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
