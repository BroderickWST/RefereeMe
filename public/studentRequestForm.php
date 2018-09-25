<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/studentForm.css">
    <script src="js/studentFormValidation.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/studentNavBar.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Referee Request</title>
  </head>
  <body>

  <?php include 'php/menu.php'; ?>

  <div class="main">
    <div class="header">
      <h1 class="header-title">RefereeMe</h1>
    </div>
    <div class="section">
      <form name="studentForm" action="form-submit.php" method="post" onSubmit="return validateForm()">
      <h2>Referral Request Form</h2>
      <label id="errorMsg"></label><br>

      <label for="select-position">What job are you applying for?</label><br><br>
      <select size="1" id="select-position" name="selectPosition">
        <option value="Select Position">Select Position</option>
        <option value="Programmer">Programmer</option>
        <option value="Network Security">Network Security</option>
        <option value="Database Management">Database Management</option>
        <option value="App Development">App Development</option>
        <option value="Web Design">Web Design</option>
        <option value="Data Science">Data Science</option>
      </select><br><br>

      <label for="other-selection">If other, please specify</label><br>
      <input type="text" class="formInput" id="other-selection" name="otherSelection" minlength="2"><br><br>

      <label for="company">What company or business are you applying for?</label><br>
      <input type="text" class="formInput" id="company" name="company" required><br><br>

      <label for="location">Where is the job located?</label><br>
      <input type="text" class="formInput" id="location" name="location" minlength="2" required><br><br>

      <div class="inline-form">
        <label for="contact">Person of Contact:</label>
        <input type="text" class="formInput" id="contact" name="contactPerson" minlength="2" required>

        <label for="contact-number">Contact number:</label>
        <input type="text" class="formInput" id="contact-number" name="contactNumber" minlength="2" required>
      </div><br><br>
      <label for="extra-detail">Please any extra details as necessary:</label><br><br>
      <textarea name="extraDetails" class="formInput" id="extra-detail" minlength="2" rows="10" cols="100">
      </textarea><br><br>


      <button type="submit" class="form-button">Finish</button>
      <button class="form-button">Cancel</button>
      </form>

  </div>
  </body>
</html>
