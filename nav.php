<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<title>navigation</title>
</head>
<style>

</style>
<body>
<div class="sidetab" id="myTopnav">
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
       <i class="fa fa-bars"></i>
     </a>
  <div class="admintitle">
    <p><b>Admin Profile</b></p>
    <img src="Bitmap.png">
    <p class="profname"><b><?php echo $_SESSION['name']; ?></b></p>

  </div>
  <div class="sidetabs">
    <a href="Admin.php" >My Dashboard</a>
    <a href="accept-decline.php">New Students</a>
    <a href="employees.php">New Employees</a>
    <a href="editSchedule.php">Edit Schedules & Fees</a>
    <a href="editSalary.php">Edit Salary</a>
    <a href="editClass.php">Edit Class</a>
    <a href="events.php">Add Events</a>
    <a href="chat.php">Chat</a>
    <a href="account-settings.php">Account Settings</a>
    <a href="sign out.php">Sign Out</a>
  </div>
</body>
</html>
