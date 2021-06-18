
<?php 

REQUIRE_ONCE "../classes/connectionToDataBase.php";
REQUIRE_ONCE "../classes/users.php";
$Users = new Users;
$results = $Users->viewfreq();
 ?>

   <?php 

if(isset($_POST['subm'])){

header("Location:userfreq.php");
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Sharm El-sheikh International school</title>
<link href="StyleSheet.css" rel="stylesheet">

<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->
<body>
  
  </div>
  </div>
  <div class="header">
    <div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                <a class="nav-link" href="index.html">HOME<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="about.html">About Us</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="news.html">News/Events</a></li>
                               <li class="#" href="#">
                                <a class="nav-link" href="life.html">School life</a></li>
                               <li class="nav-item" href="#">
                                <a class="nav-link" href="Admissions.html">Admissions</a></li>
                                      <li class="nav-item" href="#">
                                <a class="nav-link" href="emp.html">Employment</a></li>
                                       <li class="nav-item" href="#">
                                <a class="nav-link" href="portal.html">Portal</a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>






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
</head>

<body>


 
   <div class="boxstudentss" id="boxstudentss"><h1  class="boxtext11" >Frequently Asked Questions</h1></div>

   <div class="tablev" id="t">
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


        <!--Grid column-->


        <!--Grid column-->
    

</section>
<!--Section: Contact v.2-->
</body>





      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>



 <?php 

  if(isset($_POST['submit'])){
$Users = new Users;

$Users->name=$_POST["name"];
$Users->email=$_POST["email"];
$Users->number=$_POST["number"];
$Users->enrolled=$_POST["enrolled"];
$Users->question=$_POST["question"];
$Users->contact();
header("Location:about.php");
}



  ?>