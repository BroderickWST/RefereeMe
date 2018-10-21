<?php
require 'connect.php';

// select lec_name from `lecturer`;
try {
  $sql = 'SELECT name FROM lecturer';

  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
}

echo "<select name='refereeSelect'>";
  echo "<option value='selectLecturer'>Select Lecturer</option>";
while ($row = $q->fetch()):
    echo "<option>" . htmlspecialchars($row['name']) . "</option>";
endwhile;
echo "</select>";
?>
