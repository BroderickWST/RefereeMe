<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentForm.css">
    <link rel="stylesheet" href="css/studentNavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Confirm</title>
  </head>
  <body>
    <?php include 'php/menu_lecturer.php'; ?>

    <div class="main">
      <div class="header">
        <h1 class="header-title">Submission</h1>
      </div>
      <div class="section">
        <h2>Are you sure you want to deny this request?</h2>
        <button id="submit" type="submit" class="form-button">Deny Request</button>
        <button class="form-button"><a href="lecturer.php">Return</a></button>

<!--          How do you know if this value exists?-->
        <p><?php echo $_POST['ref_id']; ?></p>

<!--          This is used to show the result of your deny_request.php-->
        <div id="query-result"></div>

      </div>
    </div>
    <script>
      $(document).ready(function () {
          $("#submit").click(function () {
              // I don't know if this will work as I have been extracting textual values from html
              // Check if this has a value by console.log(ref_id)
              var ref_id = <?php echo $_POST['ref_id']; ?>;

              // In my example I am only taking the values from html which has values echoed out with php
              // ref_id should be a html element.  Could be a class or an id
              // which you can extract the text out of using .text()

              console.log(`Summary: ${ref_id}`);
              var stu_data = { student: `${ref_id}` };
              $.ajax({
                  url: "php/deny_request.php",
                  method: "POST",
                  data: stu_data,
                  success: function (data) {
                      // alert("Request Denied");
                      $("#query-result").html('stu_data:' + data);
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
