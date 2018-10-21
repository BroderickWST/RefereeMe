<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/studentForm.css">
  <script src="js/studentFormValidation.js" charset="utf-8"></script>
  <link rel="stylesheet" href="css/studentNavBar.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Student Referee Request</title>
</head>
<body>

  <?php include 'php/menu_student.php'; ?>
  <?php include 'php/connect.php'; ?>

  <div class="main">
    <div class="header">
      <h1 class="header-title">RefereeMe</h1>
    </div>
    <div class="section">
      <form name="studentForm" action="form-submit.php" method="post" onsubmit="return validateForm()">
        <h2>Referral Request Form</h2>
        <label id="errorMsg"></label><br>

        <label for="select-position">Who would you like to be your referee?</label><br><br>
        <?php include 'php/selectLecturersDropdown.php' ?><br><br>

        <label for="select-position">What job are you applying for?</label><br><br>
        <select size="1" id="select-position" tabindex="1" name="selectPosition">
          <option value="Select Position">Select Position</option>
          <option value="Programmer">Programmer</option>
          <option value="Network Security">Network Security</option>
          <option value="Database Management">Database Management</option>
          <option value="App Development">App Development</option>
          <option value="Web Design">Web Design</option>
          <option value="Data Science">Data Science</option>
        </select><br><br>

        <label for="other-selection">If other, please specify</label><br>
        <input type="text" tabindex="2" class="formInput" id="other-selection" name="otherSelection"><br><br>

        <label for="company">What companies or businesses are you applying for?</label><br>
        <ul id="business-list"></ul>

        <input type="text" tabindex="3" placeholder="Business Name" class="multiple-input" id="company" name="company" >
        <i class="fa fa-plus" tabindex="4" onkeypress="newElement()" onclick="newElement()"></i><br><br>

        <label for="extra-detail">Please any extra details as necessary:</label><br><br>
        <textarea name="extraDetails" tabindex="5" class="formInput" id="extra-detail" minlength="2" rows="10" cols="100"></textarea><br><br>


        <button type="submit" tabindex="6" class="form-button">Finish</button>
        <button class="form-button" tabindex="7"><a href="index.php">Cancel</a></button>
      </form>

    </div>
  </body>
  </html>
