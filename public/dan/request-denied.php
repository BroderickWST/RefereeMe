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
        <h2>Are you sure you want to decline this reference request?.</h2>
        <button id="submit" type="submit" class="form-button">Confirm</button>
        <button class="form-button"><a href="lecturer.php">Return</a></button>
      </div>
    </div>
    
    <script>
    $(document).ready(function () {
        $("#submit").click(function () {
            var requestId = $('#requestId').text();
            };
            $.ajax({
                url: "php/send_lecturerresponse.php",
                method: "POST",
                data: newData,
                success: function (data) {
                    alert("great success!");
                    $("#query-result").html('submitted successfully:' + data);
                    window.location.href = "http://rthosted55.com/";

                },
                error: function () {
                    alert("failure");
                    $("#query-result").html('there is error while submit');
                }
            })
        });
    });</script>
    
  </body>
</html>
