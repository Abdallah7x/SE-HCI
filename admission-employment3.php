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
  <div class="topnav1" id="myTopnav1">
  <a href="index.html" style="float:left; "> <img src="logo.png" class="logo"></a>
  <a href="login.php">Portal</a>
  <a href="admission-employment2.php" id="active">Employment</a>
  <a href="newstudents2.php">Admission</a>
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
    <div class="form">
      <p style="color:white;"><b>Employments<br><br>PLease fill the form below</b></p>
 <form method="POST" style="color:white;">
    <label  for="fname">Gender:</label><br>
   
    <select name ="gender" >
      <option class="text" value="M">Male</option>
      <option class="text" value="F">Female</option>
  </select><br>
    <label  for="lname">Email:</label><br>
    <input class="text" type="email" id="lname" name="email" placeholder="Example" required><br>
 

    <b><input class="mission12" name='butsub' type="submit" value ="SUBMIT"></b>
</form>

    </div>
    <div id="left22">

    <p class="admissiontext" style="color:white;"><b>
      All of our teachers are highly
      qualified with experience in
      their country of origin and
      internationally. They are
      recruited personally by the
      Managing Director and the
      Principal and are supported by
      assistants and an
      administration team. The
      pursuit of quality is the aim of
      everyone at SSC.

    </b></p>
    </div>
    </div>





  </div>







  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav1");
    if (x.className === "topnav1") {
      x.className += " responsive";
    } else {
      x.className = "topnav1";
    }
  }
  </script>
</body>
</html>

<?php
if (isset($_POST['butsub'])){
$Users = new Users;
$Users->userFName=$_GET["fname"];
$Users->userMName=$_GET["mname"];
$Users->userLName=$_GET["lname"];
$Users->email=$_POST["email"];
$Users->phoneNo=$_GET["phoneNumer"];
$Users->Age=$_GET["age"];
$Users->Gender=$_POST["gender"];
$Users->UserType = 5;
$Users->addUsers();
header("Location:index.html");
}
?>
