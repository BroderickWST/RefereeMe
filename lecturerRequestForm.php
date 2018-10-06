<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentForm.css">
    <link rel="stylesheet" href="css/studentNavBar.css">
    <script src="js/studentFormValidation.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Answer Student Request</title>
  </head>
  <body>
    <?php include 'php/menu.php'; ?>
    <div class="main">
      <div class="header">
        <h1 class="header-title">RefereeMe</h1>
      </div>

      <div class="section">
        <h2>*Student Name*'s Reference Request</h2>
        <label id="errorMsg"></label><br>

        <!-- UNCOMMENT THE FOLLOWING, WHEN PAGE IS ABLE TO RECEIVE STUDENT REQUEST DATA -->
        <!--
        <div class="info-box">
          <strong>Student details</strong>
          <p>Name</p>
          <p>Job Type: <?php echo $_POST["selectPosition"]; ?></p>
          <div class="flex-div">
            <div>
              <p>Business: <? php echo $_POST["company"]; ?></p>
              <p>Job Location: <?php echo $_POST["location"]; ?></p>
              <p>Person of Contact: <?php echo $_POST["contactPerson"]; ?></p>
              <p>Contact number: <?php echo $_POST["contactNumber"]; ?></p>
            </div>
            <div>
              <p>Business: <? php echo $_POST["company"]; ?></p>
              <p>Job Location: <?php echo $_POST["location"]; ?></p>
              <p>Person of Contact: <?php echo $_POST["contactPerson"]; ?></p>
              <p>Contact number: <?php echo $_POST["contactNumber"]; ?></p>
            </div>
          </div>
          <p>Extra details: <?php echo $_POST["extraDetails"]; ?></p>
        </div>
        -->

        <div class="info-box">
          <strong>Student details</strong>
          <p>Name</p>
          <p>Job Type: </p>
          <div class="flex-div">
            <div>
              <p>Business: </p>
              <p>Job Location: </p>
              <p>Person of Contact: </p>
              <p>Contact number: </p>
            </div>
            <div>
              <p>Business: </p>
              <p>Job Location: </p>
              <p>Person of Contact: </p>
              <p>Contact number: </p>
            </div>
          </div>
          <p>Extra details: </p>
        </div>

      <form name="lecturerForm" action="request-answered.php" method="post" onSubmit="return validateForm()">

        <p>What kind of referee are you acting as?</p>
        <input type="radio" name="roleType" ID="roleType" value="Technical" required>Technical referee<br>
        <input type="radio" name="roleType" ID="roleType" value="Character" required>Character referee<br>
        <br>
        <input type="radio" name="roleType" ID="roleType" value="Abstaining" required>Abstain as a referee<br>
        <br>

        <label for="phoneNo">Phone</label>
        <input type="text" name="phoneNo" required><br>
        <label for="email">E-Mail</label>
        <input type="text" name="email" required><br>
        <br>

        <label for="recommendation">Letter of Recommendation:</label><br>
        <textarea name="recLetter" class="formInput" id="recommendation" minlength="1" rows="10" cols="100"></textarea><br><br>

        <button type="submit" class="form-button">Finish</button>
        <button class="form-button">Cancel</button>
      </div>
      </form>
    </div>
  </body>
</html>
