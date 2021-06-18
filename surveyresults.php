

<?php
REQUIRE_ONCE "../classes/users.php";
ob_start();
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
  <div class="boxxes">
    <form method="post">
   <input  type="" id="ss" name="student" class="boxtext box1" value="Student survey Results" disabled>
   <input type="" id="ts" name="teacher" class="boxtext box3" value="Teacher survey Results" disabled>
</form>
<div class="tablev" style="width: 500px;top: 200px;left: 30px;">
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
  

              echo "</tr>";
          }
          ?>




      </tbody>
    </table>
   
  </div>
<div class="tablev" style="width: 500px;top: 200px;left: 730px;">
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
  

              echo "</tr>";
          }
          ?>


</body>
</html>
