<?php
$to = "kkemei@icloud.com";
$subject = "RefereeMe - Lecturer Replied";
$txt = "A lecturer has referred you. Login to RefereeMe to find your reference";
$headers = "From: test@rthosted55.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>