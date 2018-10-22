<?php
require 'connect.php';
try {
  $sql = 'SELECT lecturer.name as referee, students.name as student, company, position, job_location, lecturer_approved FROM reference, lecturer, students WHERE reference.stu_id = students.stu_id AND reference.lecturer_id = lecturer.lecturer_id';
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
}

//Now form just needs to send something
while ($row = $q->fetch()):
    if($row['lecturer_approved'] != 0){ }
    else{
      $name = $row['student'];
      $company = $row['company'];
      $position = $row['position'];
      $location = $row['job_location'];

      echo "<form name='test' method='post' action='lecturerRequestForm.php'>";
      echo "<input type='hidden' name='student' value='$name'>";
      echo "<input type='hidden' name='company' value='$company'>";
      echo "<input type='hidden' name='position' value='$position'>";
      echo "<input type='hidden' name='location' value='$location'>";

      echo "<button class='form-button' type='submit' name='button'>" . htmlspecialchars($row['student']) . "</button>";
      echo "</form>";
    }

    // echo "<br><br>";
endwhile;
?>
