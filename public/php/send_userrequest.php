<?php
/**
 * Created by PhpStorm.
 * User: danielarcher
 * Date: 12/10/18
 * Time: 10:20 AM
 */

require 'connect.php';

try {
    $my_Insert_Statement = $conn->prepare('INSERT INTO reference (position, company, job_location, stu_id, lecturer_id, lecturer_approved) VALUES ("Web Design", "Fierce", "Brisbane", 1, 2, 0)');

    if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}


} catch (PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
}
