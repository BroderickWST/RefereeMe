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
    <?php include 'php/approve_request.php'; ?>

    <div class="main">
      <div class="header">
        <h1 class="header-title">Submission</h1>
      </div>
      <div class="section">
        <h2>Please review details before sending</h2>
        <div class="info-box">
          <p>Student Name: <?php echo $_POST['student']; ?></p>
          <p>Role type: <?php echo $_POST["roleType"]; ?></p>
          <p>Phone: <?php echo $_POST["phoneNo"]; ?></p>
          <p>e-Mail: <?php echo $_POST["email"]; ?></p>
          <p>Letter of Recommendation: <?php echo $_POST["recLetter"]; ?></p>
        </div>

        <p>Once you press send, you won't be able to edit your form.</p>
        <button id="submit" type="submit" class="form-button"><a href="index.php">Send</a></button>
        <button class="form-button"><a href="lecturer.php">Cancel</a></button>
      </div>
    </div>

    <div id="query-result"></div>

    <script>
      $(document).ready(function () {
          $("#submit").click(function () {
              var ref_id = <?php echo $_POST['ref_id']; ?>;
              console.log(`Summary: ${ref_id}`);
              var stu_data = { student: `${ref_id}` };
              $.ajax({
                  url: "php/approve_request.php",
                  method: "POST",
                  data: stu_data,
                  success: function (data) {
                      $("#query-result").html(data);
                      // $("#query-result").html('stu_data:' + data);
                  },
                  error: function () {
                      alert("Error - Something went wrong");
                  }
              })
          });
      });
    </script>

  </body>
</html>
