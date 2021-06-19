<?php
error_reporting(0);
include_once("../View/userView.php");
$Userview = new ViewUsers;
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<title>Sharm El-Sheikh School - admission</title>
</head>
<!-- <body>
  <div class="topnav" id="myTopnav">
  <a href="index.html" style="float:left;"><img src="logo.png" class="logo"></a>
  <a href="login.php">Portal</a>
  <a href="admission-employment2.php" >Employment</a>
  <a href="newstudents2.php" id="active">Admission</a>
  <a href="#news">School Life</a>
  <a href="about.php">About Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </a>
  </div> -->
  <?php
  $Userview->navigation();
  ?>

  <img src="bgimage.jpg" class="bgimage">

  <div class="opacity">

    <div class="divideall">

    <div id="left224">
        <p class="admissionword">Admission</p>
    <p class="admissiontext">
         <b>Sharm El Sheikh College aims is to provide opportunities for a better future through providing students with the 21st Century skills and quality education that meets the needs of the community. Children come to an understanding that they live in a special unique place, and that they need to have tolerance for all.<br>
        We at Sharm El Sheikh College find it our duty to nurture today’s children as they are tomorrow’s future. We instil in our children the love of seeking knowledge and the belief that it is an ongoing, never-ending process. We prepare them for the ever-changing world around us, encouraging them to become design thinkers and entrepreneurs within the expanding global community of the 21st Century. We can achieve this by instilling SSC’s Personal Core Values within our daily school life, assisting them to face the unknown and be ready for any unexpected circumstance. We also believe that fulfilling these goals should be a joint venture shared by both the School and the Parents.
        </b>
    </p>
    </div>
    <div class="form1">
    <p class="mistext">Please fill the form below</b></p>
<?php
$Userview->newStudent2();
 ?>
    </div>
    </div>
    </div>

  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
</body>
</html>
