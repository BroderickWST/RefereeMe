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
        <h1 class="header-title">RefereeMe</h1>
      </div>
      <div class="section">
        <h1>Home page</h1>
        <button class="form-button" type="button" name="button">
          <a href="lecturerRequestForm.php">Barry Badrinath's request</a>
        </button>
        <?php include 'php/select_students.php'; ?>
      </div>
    </div>
  </body>
</html>
