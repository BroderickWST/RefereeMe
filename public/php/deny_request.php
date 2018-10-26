<?php
require 'connect.php';

$lecturer_denied = 2;

try {
    $data = json_encode($_POST);
    $data_array = json_decode($data, true);

    $select_stmt = $conn->prepare("select reference.id, stu_id, lecturer_approved from reference;");
    $sql = 'SELECT reference.id as req_id, stu_id, lecturer_approved FROM reference';

    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $q->fetch()):

      if($row['req_id'] == $data_array["student"]) {
        // echo $row['req_id'];
        // echo $data_array["student"];

        // $test_stmt->bindParam('req_id', $data_array["student"]);
        // $test_stmt = $conn->prepare("select reference.id, stu_id, lecturer_approved from reference;");

        $update_stmt = ("UPDATE reference SET lecturer_approved = 1 WHERE id = :ref_id");
        $select_stmt->bindParam(':ref_id', $data_array["student"]);

        // $del_stmt = $conn->prepare("DELETE FROM reference WHERE id = req_id");
        // $update_stmt = "UPDATE reference (lecturer_approved) SET lecturer_approved= '1'";
        // $update_stmt = $conn->prepare("UPDATE reference (lecturer_approved) SET lecturer_approved= '1' WHERE id = $data_array['student']");

        if ($conn->query($update_stmt) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        // $del_stmt->execute();
        // $update_stmt->execute();

      }
      endwhile;

 }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
