<?php
require 'connect.php';
// This is a bit of a hack because I wanted to just use json_decode
// This makes the post variable into a json object
$data = json_encode($_POST);

// this puts the json object into an associative array which was a nicer solution for me because I had a few values
// associative array assigns names to values instead of numbers so not $data_array[0] but $data_array["json-prop-name"]
$data_array = json_decode($data, true);
// you can access values from this by using
echo $data_array["student"];
$lecturer_approved = 2;
// all echoes should appear in the html element you have defined in your jquery #query-result
echo $data;


try {
    $select_stmt = $conn->prepare("select reference.id, stu_id, lecturer_approved from reference;");

    //Basically, I can't figure out how to call the 'ref_id' passed to here (deny_request.php) from request-denied.php (which I realise is really bad naming)



    //This is testing for the code that I will run when I look for the value passed
    // $sql = 'SELECT reference.id as req_id, stu_id, lecturer_approved FROM reference';
    // $q = $conn->query($sql);
    // $q->setFetchMode(PDO::FETCH_ASSOC);
    //
    // while ($row = $q->fetch()):
    //   $stu_id = $row['stu_id'];
    //   echo "<br><br>";
    //   // echo " Test-1";
    //   echo "dollar-student_id:";
    //   echo $stu_id;

      //if $stu_id equals the one passed to deny_request
      // if ($stu_id == ???) {}

      // if($row['stu_id'] == $student_id ){
      //   echo $row['stu_id'];
      //   echo $student_id;
      //   echo " Test-2";
      //   // echo " lec_app (before):";
      //   // echo ($row['lecturer_approved']);
      //   // $row['lecturer_approved'] = 2; //2 equals deny
      //   // echo " lec_app (after):";
      //   // echo ($row['lecturer_approved']);
      // }
      // else{ echo " Test-3";}
    // endwhile;

    // $select_stmt = $conn->prepare("select reference.id, stu_id, lecturer_approved from reference;");
    // if(':reference.id'] == $data_array["ref_id"]){
    //   echo "TEST TEST TEST OH GOD TEST";
    // }

    // $select_stmt = $conn->prepare("select lecturer_id, stu_id from students, lecturer where lecturer.name = :referee and students.name = :student;");
    // $select_stmt->bindParam(':referee', $data_array["referee"]);
    // $select_stmt->bindParam(':student', $student);
    // $select_stmt->execute();
    //
    // $reference_participant_ids = $select_stmt->fetch(PDO::FETCH_ASSOC);
    // $lecturer_id = $reference_participant_ids["lecturer_id"];
    // $student_id = $reference_participant_ids["stu_id"];
    //
    // $insert_stmt = $conn->prepare("insert into reference (position, company, job_location, stu_id, lecturer_id,
    //                           lecturer_approved) values (:position, :company, :job_location, :student_id, :lecturer_id, :lecturer_approved )");
    // $insert_stmt->bindParam(':position', $data_array["position"]);
    // $insert_stmt->bindParam(':company', $data_array["company"]);
    // $insert_stmt->bindParam(':job_location', $job_location);
    // $insert_stmt->bindParam(':student_id', $student_id);
    // $insert_stmt->bindParam(':lecturer_id', $lecturer_id);
    // $insert_stmt->bindParam(':lecturer_approved', $lecturer_approved);
    //
    // $insert_stmt->execute();

 }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
