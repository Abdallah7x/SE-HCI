<?php
REQUIRE_ONCE "../classes/users.php";
$Users = new Users;
$result = $Users->GetUserType();
if (isset($_POST["student"])){
  header("Location: admin-buttons.php.?ut=2");
}
if (isset($_POST["admin"])){
  header("Location: admin-buttons.php.?ut=1");
}

if (isset($_POST["parent"])){
  header("Location: admin-buttons.php.?ut=6");
  }
if (isset($_POST["teacher"])){
  header("Location: admin-buttons.php.?ut=5");
    }
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
<title>Sharm El-Sheikh School - Admin</title>
</head>

<body>
<?php include 'nav.php';?>


  <div class="boxxes">
  <h3 class="admintoptext">My Dashboard<h3>
    <form method="post">
   <input type="submit" name="student" class="boxtext box1" value="Student">
   <input type="submit" name="parent" class="boxtext box2" value="Parent">
   <input type="submit" name="teacher" class="boxtext box3" value="Teacher">
   <input type="submit" name="admin" class="boxtext box4" value="Admin">
</form>
</div>
   <div class="tablev">
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
          <th scope="col">User Type</th>
        </tr>
      </thead>
      <tbody>
          <?php
          $counter =1;

          while ($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo '<th scope = "row">'.$counter.'</th>';
              echo '<td>'.$row['fname'].'</td>';
              echo '<td>'.$row['mname'].'</td>';
              echo '<td>'.$row['lname'].'</td>';
              echo '<td>'.$row['gender'].'</td>';
              echo '<td>'.$row['age'].'</td>';
              echo '<td>'.$row['email'].'</td>';
              echo '<td>'.$row['phoneNo'].'</td>';
              echo '<td>'.$row['usertypeName'].'</td>';
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
<?php

?>
