<?php
REQUIRE_ONCE "../classes/users.php";
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
<div class="topnav1" style="background-color: #08356a;" id="myTopnav">
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
    </a>
  </div>
  <img src="image2portal.jpg" class="bgimage">
<div class="allholder">
<img src="logo222.png" class="logoportal">
<div class="form122">
<form  method = "POST">
  <br>
<label class="label1" for="fname">Username:</label><br>
<input class="input1" type="text" id="fname" name="username" required><br>
<label class="label1" for="lname">Password:</label><br>
<input class="input1" type="password" id="lname" name="password" required><br>

<b><input class="mission12" type="submit" value ="Log In"></b>


</form>


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
$result = $Users->login($_POST["username"],$_POST["password"]);
$row = mysqli_fetch_array($result);
$_SESSION["name"]=$row['fname']." ".$row['mname']." ".$row['lname'];
$_SESSION['userID']=$row['userID'];
echo $row["PageName"];
header("Location: ".$row["PageName"]);


}
?>
