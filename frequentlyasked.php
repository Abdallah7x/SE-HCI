<?php

REQUIRE_ONCE "../classes/users.php";
$Users = new Users;
$results = $Users->viewfreq();

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
<link href="StyleSheet.css" rel="stylesheet">

</head>

<body>
<?php include 'nav.php';?>


 
   <div class="boxstudentss"  ><h1 class="boxtext11" >Frequently Asked Questions</h1></div>

   <div class="tablev" id="tt">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>

          <th scope="col">Question</th>
          <th scope="col">Answer</th>

                  </tr>
      </thead>
      <tbody>
          <?php
          $counter =1;

          while ($row = mysqli_fetch_array($results)){
              echo "<tr>";
             
              echo '<th scope = "row">'.$counter.'</th>';
              echo '<td>'.$row['question'].'</td>';
              echo '<td>'.$row['answer'].'</td>';
              $counter++;

     }
          ?>



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
