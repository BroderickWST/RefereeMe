<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/studentNavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/studentForm.css">
    <title>Confirm</title>
  </head>
  <body>
    <?php include 'php/menu.php'; ?>
    <div class="main">
      <div class="header">
        <h1 class="header-title">Submission</h1>
      </div>
      <div class="section">
        <h2>Please review details before sending</h2>
        <p>Job type: <?php echo $_POST["selectPosition"]; ?></p>
        <p>Other job type: <?php echo $_POST["otherSelection"]; ?></p>
        <p>Location: <?php echo $_POST["location"]; ?></p>
        <p>Company: <?php echo $_POST["company"]; ?></p>
        <p>Person of Contact: <?php echo $_POST["contactPerson"]; ?></p>
        <p>Contact number: <?php echo $_POST["contactNumber"]; ?></p>
        <p>Extra details: <?php echo $_POST["extraDetails"]; ?></p>
        <p>Once you press send, you won't be able to edit your form.</p>
        <button type="submit" class="form-button"><a href="index.php">Send</a></button>
        <button class="form-button"><a href="studentRequestForm.php">Go back</a></button>

    </div>
</div>
  </body>
</html>
