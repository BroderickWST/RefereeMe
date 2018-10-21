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
        <h2>Please review details before sending</h2>
        <div class="info-box">
          <p>Business: <?php echo $_POST['company']; ?></p>
          <p>Role type: <?php echo $_POST["roleType"]; ?></p>
          <p>Phone: <?php echo $_POST["phoneNo"]; ?></p>
          <p>e-Mail: <?php echo $_POST["email"]; ?></p>
          <p>Letter of Recommendation: <?php echo $_POST["recLetter"]; ?></p>
        </div>

        <p>Once you press send, you won't be able to edit your form.</p>
        <button type="submit" class="form-button"><a href="index.php">Send</a></button>
        <button class="form-button"><a href="lecturer.php">Cancel</a></button>
      </div>
    </div>

  </body>
</html>
