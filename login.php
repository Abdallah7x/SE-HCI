

<?php
// REQUIRE_ONCE "../classes/users.php";
include_once("../View/userView.php");
$Userview = new ViewUsers;
error_reporting(0);
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
<title>Sharm El-Sheikh School - Login</title>
</head>
<style>

</style>
<body>
<!-- <div class="topnav1" style="background-color: #08356a;" id="myTopnav">
  <a href="index.html" style="float:left; "> <img src="logo.png" class="logo"></a>
  <a href="login.php" id="active">Portal</a>
  <a href="admission-employment2.php" >Employment</a>
  <a href="newstudents2.php" >Admission</a>
  <a href="about.php">About Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
   
  </div> -->
  <?php
  $Userview->navigation();
  ?>

  <img src="image2portal.jpg" class="bgimage">
<div class="allholder">
<!-- <img src="logo222.png" class="logoportal">
 --><div class="form122">
<?php
$Userview->loginForm();
?>
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

