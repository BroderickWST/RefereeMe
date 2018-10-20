<?php
/**
 * Created by PhpStorm.
 * User: danielarcher
 * Date: 12/10/18
 * Time: 10:20 AM
 */

require 'connect.php';

// $referee = isset($_POST['referee']) ? $_POST['referee'] : null;
// $position = isset($_POST['position']) ? $_POST['position'] : null;
// $otherPosition = isset($_POST['otherPosition']) ? $_POST['otherPosition'] : null;
// $company = isset($_POST['company']) ? $_POST['company'] : null;
// $extraDetails = isset($_POST['extraDetails']) ? $_POST['extraDetails'] : null;

$referee = "sddfsfd";
$position = "dddddd";
$otherPosition = "sdsdfdsf";
$company = "dfasdfasdf";
$extraDetails = "sdfsdf";




// $selectPosition = isset($_POST['selectPosition']) ? $_POST['selectPosition'] : null;
// $company = isset($_POST['company']) ? $_POST['company'] : null;
// $job_location = isset($_POST['job_location']) ? $_POST['job_location'] : null;
// $stu_id = isset($_POST['stu_id']) ? $_POST['stu_id'] : null;
// $lecturer_id = isset($_POST['lecturer_id']) ? $_POST['lecturer_id'] : null;
//
// echo $selectPosition . " " . $company;


try {
  // $sql = "INSERT INTO reference (referee, jobType, otherJobType, company, extraDetails)
  // VALUES ($referee, $position, $otherPosition, $company, $extraDetails)";
  // $q = $conn->query($sql);
  $sql = "INSERT INTO reference (referee) VALUES ('referee')";

  $sql = sprintf("INSERT INTO reference (referee) VALUES (%s)", $referee);

  $q = $conn->query($sql);


    // set the PDO error mode to exception
    // $stmt = $conn->prepare("INSERT INTO reference (referee, jobType, otherJobType, company, extraDetails) VALUES ($referee, $position, $otherPosition, $company, $extraDetails)");
    // $stmt->execute();
    echo "Data inserted";
    }
    // INSERT INTO table_name (column1, column2, column3, ...)
    // VALUES (value1, value2, value3, ...);
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
