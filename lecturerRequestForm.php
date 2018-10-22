<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentForm.css">
    <link rel="stylesheet" href="css/studentNavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>.quit{margin-left: 430px; background-color: 	#FF2626 }</style>

    <script src="js/studentFormValidation.js" charset="utf-8"></script>
    <title>Answer Student Request</title>
  </head>
  <body>
    <?php include 'php/menu_lecturer.php'; ?>
    <div class="main">
      <div class="header">
        <h1 class="header-title">RefereeMe</h1>
      </div>

      <div class="section">
        <h2><?php echo $_POST['student']; ?>'s Reference Request</h2>
        <label id="errorMsg"></label><br>
        <div class="info-box">
          <strong>Student details</strong>
          <p>Name: <?php echo $_POST['student']; ?></p>
          <p>Job Type: <?php echo $_POST['position']; ?></p>
          <p>Business: <?php echo $_POST['company']; ?></p>
          <p>Job Location: <?php echo $_POST['location']; ?></p>
        </div>

      <form name="lecturerForm" action="request-approved.php" method="post" onSubmit="return validateForm()">

        <p>What kind of referee are you acting as?</p>
        <input type="radio" name="roleType" ID="roleType" value="Technical" required>Technical referee<br>
        <input type="radio" name="roleType" ID="roleType" value="Character" required>Character referee<br>
        <br>

        <label for="phoneNo">Phone</label>
        <input type="text" name="phoneNo" required><br>
        <label for="email">E-Mail</label>
        <input type="text" name="email" required><br>
        <br>

        <label for="recommendation">Letter of Recommendation:</label><br>
        <textarea name="recLetter" class="formInput" id="recommendation" minlength="1" rows="10" cols="100"></textarea><br><br>

        <!-- Send through Student Details, so they can be recovered when users returns to this page -->
        <input type='hidden' name='student' value='$name'>
        <input type='hidden' name='company' value='$company'>
        <input type='hidden' name='position' value='$position'>
        <input type='hidden' name='location' value='$location'>

        <button type="submit" class="form-button">Finish</button>
        <button class="form-button" type="button">
          <a href="lecturer.php">Cancel</a>
        </button>

        <button class="quit form-button" type="button">
          <a href="request-denied.php">Deny being a Reference</a>
        </button>
      </form>
      </div>
      </form>
    </div>
  </body>
</html>
