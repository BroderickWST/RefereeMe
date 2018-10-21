<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/studentNavBar.css">
<link rel="stylesheet" href="css/studentForm.css">
<title>Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php include 'php/menu_no-login.php'; ?>

<div class="main">
  <div class="header">
    <h1 class="header-title">RefereeMe</h1>
  </div>
  <div class="section">
    <h1>Home page</h1>
      <button class="form-button" type="button" name="button">
        <a href="studentRequestForm.php">Student request</a>
      </button>
      <button class="form-button" type="button" name="button">
        <a href="lecturer.php">Lecturer request</a>
      </button>
</div>

</body>
</html>
