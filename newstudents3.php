<?php
REQUIRE_ONCE "../classes/users.php";
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
<body>
  <div class="topnav" id="myTopnav">

  <a href="index.html" style="float:left; "> <img src="logo.png" class="logo"></a>
  <a href="login.php">Portal</a>
  <a href="admission-employment2.php" >Employment</a>
  <a href="newstudents2.php" id="active">Admission</a>
  <a href="#news">School Life</a>
  <a href="#contact">News/Events</a>
  <a href="about.html">About Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
  <img src="bgimage.jpg" class="bgimage">
  <div class="opacity">




    <div class="divideall">

    <div id="left224">

    <p class="admissiontext"><b>
      Sharm El Sheikh College aims is to provide opportunities for a better future through providing students with the 21st Century skills and quality education that meets the needs of the community. Children come to an understanding that they live in a special unique place, and that they need to have tolerance for all.

    </b></p>
    </div>

    <div class="form1">
      <p class="mistext"><b>Admission<br><br>PLease fill the form below</b></p>
  <form method="POST">
    <label class="label1" for="fname">Gender:</label><br>
   
    <select  class="input1"name ="gender">
      <option value="M">Male</option>
      <option value="F">Female</option>
  </select><br>
    <label class="label1" for="lname">Email:</label><br>
    <input class="input1" type="email" id="lname" name="email" placeholder="Example" required><br>
    <b><input class="mission12" type="submit" value ="SUBMIT"></b>
</form>
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
<?php
if ($_POST){
$Users = new Users;
$Users->userFName=$_GET["fname"];
$Users->userMName=$_GET["mname"];
$Users->userLName=$_GET["lname"];
$Users->email=$_POST["email"];
$Users->phoneNo=$_GET["phoneNumer"];
$Users->Age=$_GET["age"];
$Users->Gender=$_POST["gender"];
$Users->UserType = 2;
$Users->AddUsers();
header("Location:index.html");
}
?>