<?php
REQUIRE_ONCE "../classes/users.php";
$Users = new Users;
$results = $Users->viewPendingUsers();

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

   <div class="boxstudents" style="left: 185px;"><h1 class="boxtext1" >New Students</h1></div>

   <div class="tablev" style="width: 985px;top: 150px;left: 252px;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Middle</th>
          <th scope="col">Last</th>
          <th scope="col">Gender</th>
          <th scope="col">Age</th>
          <th scope="col">Email</th>
          <th scope="col">PhoneNumber</th>
          <th scope="col">Accept</th>
          <th scope="col">Reject</th>
        </tr>
      </thead>
      <tbody>
          <?php
          $counter =1;

          while ($row = mysqli_fetch_array($results)){
              echo "<tr>";
              echo '<th scope = "row">'.$counter.'</th>';
              echo '<td>'.$row['fname'].'</td>';
              echo '<td>'.$row['mname'].'</td>';
              echo '<td>'.$row['lname'].'</td>';
              echo '<td>'.$row['gender'].'</td>';
              echo '<td>'.$row['age'].'</td>';
              echo '<td>'.$row['email'].'</td>';
              echo '<td>'.$row['phoneNo'].'</td>';
              echo '<td> <a href="AcceptSudent.php?uid='.$row['userID'].'&ut=2&ust=7">Accept Student </a> </td>';
              echo '<td> <a href="declineAddmission.php?uid='.$row['userID'].'&ut=2&ust=7">Decline Student </a> </td>';
              
              $counter++;
              echo "</tr>";
          }
          ?>

      </tbody>
    </table>
  </div>
  

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
