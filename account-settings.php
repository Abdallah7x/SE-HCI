<?php
error_reporting(0);
REQUIRE_ONCE "../classes/users.php";
$Users = new Users;
session_start();
$userid=$_SESSION['userID'];
if($_POST && $_POST['password']==$_POST['conpass'] && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{ $result =$Users->updateUser($userid,$_POST['fname'],$_POST['mname'],$_POST['lname'],$_POST['email'],$_POST['phone'],$_POST['age']);
$_SESSION["name"]=$_POST['fname']." ".$_POST['mname']." ".$_POST['lname'];
header("Location: Admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<title>Sharm El-Sheikh School - admin</title>
</head>
<body>

<div class="sidetab" id="myTopnav">
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
       <i class="fa fa-bars"></i>
     </a>
  <div class="admintitle">
  <?php include 'nav.php';?>
  </div>
  </div>

</div>
   <div class="tablev" style="top: 3px;left: 235px; width:100%; height:100%;">

  <img src="bgimage.jpg" style="height:150%; margin-left: -15px;margin-top: -15px;" class="bgimage">
  
  <div class="opacity" style="width: 985px;top: 30px;left: 10%; height:130%; border-radius: 50px;">
    <div class="divideall"style="width: 985px;top: 150px;left: 252px; height:300%;">
    <div style="width: 985px;top: 150px;left: 252px; height:100%;">
      <p class="mistext" style="font-size: 30px;font-weight: bold;color:black; margin-left: 20px;">Account Settings</p>
  <form method="post" style="width: 985px; height:300px;top: 150px;left: 252px; font-size: 20px;">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" placeholder="Example" required><br>
    <label for="lname">Middle name:</label><br>
    <input type="text" id="lname" name="mname" placeholder="Example" required><br>
    <label for="fname">Last name:</label><br>
    <input type="text" id="fname" name="lname" placeholder="Example" required><br>
    <label for="lname">Phone number:</label><br>
    <input type="number" id="lname" name="phone" placeholder="Example" required><br>
    <label for="fname">Age:</label><br>
    <input type="text" id="fname" name="age" placeholder="Example"required><br>
    <label for="fname">Email:</label><br>
    <input type="email" id="fname" name="email" placeholder="Example"required><br>
    <label for="lname">Password:</label><br>
    <input type="text" id="lname" name="password" placeholder="Example"required><br>
    <label for="fname">Confirmation Password:</label><br>
    <input type="text" id="fname" name="conpass" placeholder="Example" required><br>
  <b><input class="mission12" type="submit" value ="NEXT"></b>
</form>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "sidetab") {
    x.className += " responsive";
  } else {
    x.className = "sidetab";
  }
}
</script>

</body>
</html>
