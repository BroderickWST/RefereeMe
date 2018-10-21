<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentNavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/studentForm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Confirm</title>
  </head>
  <body>
    <?php include 'php/menu_student.php'; ?>
    <div class="main">
      <div class="header">
        <h1 class="header-title">Submission</h1>
      </div>
      <div class="section">
        <h2>Please review details before sending</h2>
        <p>Referee:
          <?php if (isset($_POST["refereeSelect"]) && !empty($_POST["refereeSelect"])) {
          echo "<span id='referee' >" . $_POST["refereeSelect"] . "</span>";
        } else {
          echo "N/A";
        } ?>
        </p>
        <p>Job type:
          <?php if (isset($_POST["selectPosition"]) && !empty($_POST["selectPosition"])) {
          echo "<span id='position' >" . $_POST["selectPosition"] . "</span>";
        } else {
          echo "N/A";
        } ?>
        </p>
        <p>Other job type:
          <?php if (isset($_POST["otherSelection"]) && !empty($_POST["otherSelection"])) {
          echo "<span id='otherSelection' >" . $_POST["otherSelection"] . "</span>";
        } else {
          echo "N/A";
        } ?>
        </p>
        <p>Company:
          <?php if (isset($_POST["company"]) && !empty($_POST["company"])) {
            echo "<span id='company'>" . $_POST["company"] . "</span>";
          } else {
            echo "N/A";
          }?>
        </p>

        <p>Extra details:
          <?php if (isset($_POST["extraDetails"]) && !empty($_POST["extraDetails"])) {
            echo "<span id='extraDetails' >" . $_POST["extraDetails"] . "</span>";
          } else {
            echo "N/A";
          }?>
        </p>

        <p>Once you press send, you won't be able to edit your form.</p>

        <button id="submit" type="submit" class="form-button">Send</button>
        <button class="form-button"><a href="studentRequestForm.php">Go back</a></button>

    </div>
</div>
<script>
$(document).ready(function(){
    $("#submit").click(function(){
      var referee = $('#referee').text();
      var position = $('#position').text();
      var otherPosition = $('#otherSelection').text();
      var company = $('#company').text();
      var extraDetails = $('#extraDetails').text();
      console.log(`Summary: ${referee}, ${position}, ${otherPosition}, ${company}, ${extraDetails}`);
      $.ajax({
        url: "php/send_userrequest.php",
        method: "POST",
        data:
        {
          referee: `${referee}`,
          position: `${position}`,
          otherPosition: `${otherPosition}`,
          company: `${company}`,
          extraDetails: `${extraDetails}`
      },
      success: function(data) {
        alert("Great success")
      }
      })
    });
});</script>
  </body>
</html>
