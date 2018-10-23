<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentForm.css">
    <link rel="stylesheet" href="css/studentNavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Confirm</title>
</head>
<body>
<?php include 'php/menu_lecturer.php'; ?>

<div class="main">
    <div class="header">
        <h1 class="header-title">Submission</h1>
    </div>
    <div class="section">
        <h2>Thank you for submitting your reference. The student has now been notified.</h2>

        <?php include 'php/email.php'; ?>

        <button class="form-button"><a href="index.php">Go back</a></button>

    </div>
</div>

</body>
</html>