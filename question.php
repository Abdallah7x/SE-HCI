<?php

REQUIRE_ONCE "../classes/users.php";
$Users = new Users;
$results = $Users->viewquestions();

?>
<?php
  if(isset($_POST['submit'])){
$Users = new Users;
$Users->id=$_GET["id"];
$Users->answer=$_POST["answer"];
$Users->acceptquestion();

header("Location:question.php");

}

?>
<?php
if(isset($_POST['sub'])){

header("Location:frequentlyasked.php");
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


 
   <div class="boxstudentss"  ><h1 class="boxtext11" >Asked Questions</h1></div>

   <div class="tablev" style="width: 985px;top: 200px;left: 332px;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>

          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">E-mail</th>
          <th scope="col">number</th>
          <th scope="col">Enrolled in school</th>
          <th scope="col">Question</th>
          <th scope="col">Answer</th>
          <th scope="col">Decline</th>
        </tr>
      </thead>
      <tbody>
          <?php
          $counter =1;

          while ($row = mysqli_fetch_array($results)){
              echo "<tr>";
              echo '<th scope = "row">'.$counter.'</th>';

              echo '<td>'.$row['id'].'</td>';
              echo '<td>'.$row['name'].'</td>';
              echo '<td>'.$row['email'].'</td>';
              echo '<td>'.$row['number'].'</td>';
              echo '<td>'.$row['enrolled'].'</td>';
              echo '<td>'.$row['question'].'</td>';
              echo '<td> <a href="question.php?action=answer&id='.$row['id'].'">Answer Question </a> </td>';
              echo '<td> <a href="declinequestion.php?question_id='.$row['id'].'">Decline Question </a> </td>';
  if(isset($_GET['action']))   
   {       
   if($_GET['action']=='answer')
{
  echo '<td><form method="POST"><input type="text" name="answer" style="width:100px" placeholder="enter the answer"></td><td>
  <input type="submit" style="width:130px" name="submit"  value="answer"> </form></td>';
}
}
              $counter++;
              echo "</tr>";
          }
          ?>

      </tbody>
    </table>
    <form method="POST">
    <input type="submit" style="width:250px" name="sub"  value="View frequently asked Questions"> ;
    </form>
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
