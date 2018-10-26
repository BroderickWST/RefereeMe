<?php
require 'connect.php';

try {
    $data = json_encode($_POST);
    $data_array = json_decode($data, true);

    $select_stmt = $conn->prepare("select reference.id, stu_id, lecturer_approved from reference;");
    $sql = 'SELECT reference.id as req_id, stu_id, lecturer_approved FROM reference';

    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $q->fetch()):
      if($row['req_id'] == $data_array["student"]) {
        $update_stmt = $conn->prepare("UPDATE reference SET lecturer_approved = 1 WHERE id = :ref_id");
        $update_stmt->bindParam(':ref_id', $data_array["student"]);
        $update_stmt->execute();
      }
      endwhile;
 }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
