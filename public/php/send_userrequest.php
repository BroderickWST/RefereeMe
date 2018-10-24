<?php
require 'connect.php';
$data = json_encode($_POST);
$data_array = json_decode($data, true);
$student = "Barry Badrinath";
$job_location = "Townsville";
$lecturer_approved = 0;
echo $data;


try {
    // get the id's of student and lecturer to insert into the reference table
    $select_stmt = $conn->prepare("select lecturer_id, stu_id from students, lecturer where lecturer.name = :referee and students.name = :student;");
    $select_stmt->bindParam(':referee', $data_array["referee"]);
    $select_stmt->bindParam(':student', $student);
    $select_stmt->execute();

    $reference_participant_ids = $select_stmt->fetch(PDO::FETCH_ASSOC);
    $lecturer_id = $reference_participant_ids["lecturer_id"];
    $student_id = $reference_participant_ids["stu_id"];

    $insert_stmt = $conn->prepare("insert into reference (position, company, job_location, stu_id, lecturer_id,
                              lecturer_approved) values (:position, :company, :job_location, :student_id, :lecturer_id, :lecturer_approved )");
    $insert_stmt->bindParam(':position', $data_array["position"]);
    $insert_stmt->bindParam(':company', $data_array["company"]);
    $insert_stmt->bindParam(':job_location', $job_location);
    $insert_stmt->bindParam(':student_id', $student_id);
    $insert_stmt->bindParam(':lecturer_id', $lecturer_id);
    $insert_stmt->bindParam(':lecturer_approved', $lecturer_approved);

    $insert_stmt->execute();

 }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
