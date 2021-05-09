
<?php
REQUIRE_ONCE "../classes/users.php";
$Users = new Users;
$results = $Users->viewSpecificUser($_GET["uid"]);
$row= mysqli_fetch_array($results);

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
<body>
  <div class="topnav" id="myTopnav">
  <?php include 'nav.php';?>
  </div>
  <img src="image2portal.jpg" class="bgimage">
<div class="allholder boxxes" style="width:70%">
<img src="logo222.png" class="logoportal">
<div class="form123">
<form  method = "POST">
  <br>
  <label class="label1" for="fname">Name:</label><br>
<input class="input1" type="text" value= " <?php echo $row['fname'] . " " . $row['mname'] . " ".$row['lname'];   ?>""><br>
<label class="label1" for="fname">Username:</label><br>
<input class="input1" type="text" id="fname" name="username" value = "<?php echo $row['fname'].'_'.$row['userID']; ?>""><br>
<label class="label1" for="lname">Password:</label><br>
<input class="input1" type="password" id="lname" name="password"><br>

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
$result = $Users->acceptAddmission($_GET['uid'],$_GET['ut'],$_POST["username"],$_POST["password"]);
if($_GET['ut']==5){header("Location: employees.php");}
else if($_GET['ut']==2){header("Location:accept-decline.php");}

}
?>
