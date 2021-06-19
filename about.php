
<?php 

REQUIRE_ONCE "../classes/connectionToDataBase.php";
REQUIRE_ONCE "../Model/contact.php";
// error_reporting(0);
include_once("../View/userView.php");
$Userview = new ViewUsers;
$contact = new contact;
$results = $contact->viewfreq();

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
  <div class="topnav" id="myTopnav">
  <a href="index.html" style="float:left;"><img src="logo.png" class="logo"></a>
  <a href="login.php">Portal</a>
  <a href="admission-employment2.php" >Employment</a>
  <a href="newstudents2.php">Admission</a>
  <a href="about.php"  id="active">About Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </a>
  </div>
  </div> 
 <?php
 // $Userview->navigation();
  ?>





<div class="section_service_2" >
  <br>
        <h1 class="service_text">Campus Facilities</h1>
    </div>
      <div class="col" id="a" ontouchstart="this.classList.toggle('hover');"onclick="openLightbox();toSlide(1)" class="hover-shadow preview">
        <div class="container">
          <div class="front" >
            <div class="inner">
              <p>Library</p>
            </div>
          </div>
          <div class="back">
            <div class="inner">
              <p>This room is dedicated for academic resource and enrichment  programmes. It includes a huge amount of fiction and non-fiction books. Furthermore, the library fosters a teacher  training center</p>
            </div>
          </div>
        </div>
      </div>
     



      <div class="col" id="b" ontouchstart="this.classList.toggle('hover');" onclick="openLightbox2();toSlide(1)" class="hover-shadow preview">
        <div class="container">
          <div class="front" >
            <div class="inner">
              <p>Computer </p><p> Lab</p>
            </div>
          </div>
          <div class="back">
            <div class="inner">
              <p>There is a fully equipped computer lab where students attend technology classes. Our air conditioned computer lab is equipped with the latest software  and a speedy internet connection.</p>
            </div>
          </div>
        </div>
      </div>



      <div class="col" id="c" ontouchstart="this.classList.toggle('hover');"onclick="openLightbox3();toSlide(1)" class="hover-shadow preview">
        <div class="container">
          <div class="front" id="cc">
            <div class="inner">
              <p>Music Room</p>
            </div>
          </div>
          <div class="back">
            <div class="inner">
              <p>The music room is the central venue to host the SSC music programme and the school orchestra..</p>
            </div>
          </div>
        </div>
      </div>
   
        <div class="col" id="d" ontouchstart="this.classList.toggle('hover');"onclick="openLightbox4();toSlide(1)" class="hover-shadow preview">
        <div class="container">
          <div class="front" id="dd">
            <div class="inner">
              <p>Art Workshop</p>
            </div>
          </div>
          <div class="back">
            <div class="inner">
              <p>With the introduction of an Art Specialist to the Fine Arts programme, we have  dedicated a room where students will create, learn and showcase different  aspects of fine arts.</p>
            </div>
          </div>
        </div>
      </div>
   

   <div class="col" id="e" ontouchstart="this.classList.toggle('hover');" onclick="openLightbox5();toSlide(1)" class="hover-shadow preview">
        <div class="container">
          <div class="front" id="ee">
            <div class="inner">
              <p>Science lab

</p>
            </div>
          </div>
          <div class="back">
            <div class="inner">
              <p>The School campus has a science lab that is outfitted with gas and water pipes. In addition, it is equipped with benches and a Science prep room.

</p>
            </div>
          </div>
        </div>
      </div>

 <div class="col" id="f" ontouchstart="this.classList.toggle('hover');" onclick="openLightbox6();toSlide(1)" class="hover-shadow preview">
        <div class="container">
          <div class="front" id="ff">
            <div class="inner">
              <p>Recreational area

</p>
            </div>
          </div>
          <div class="back">
            <div class="inner">
              <p>These facilities are used for all gym classes and after  school sports activities.</p>
            </div>
          </div>
        </div>
      </div>
  
<div class="contform">
</div>

<div class="contact_main" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="touch_text" id="g"  >Contact Us</h1>
                </div>
            </div>
        </div>
        <section class="mb-4" >


    <p  id="gg" class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
<section class="mb-4">


    <div class="row" id="h">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" method="POST"   >

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="number" id="number" name="number" class="form-control">
                            <label for="number" class="">Your number</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="enrolled" name="enrolled" class="form-control" >
                            <label for="enrolled" class="">Are you/your children enrolled in the school</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="question" name="question" rows="2" class="form-control md-textarea" required=""></textarea>
                            <label for="question">Your Question</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
<button name="submit" id="send">send</button>

</form>
 <form method="POST">
    <input type="submit"  name="subm" id="sub" value="View frequently asked Questions"> ;
    </form>
</div>
        </div>
    

</section>
<!--Section: Contact v.2-->
</body>
<footer>
        <div class="contact_section_2" id="hh">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/map-icon.png" id="i">
                            <p class="email-text"><a href="#"> Qesm Sharm el sheikh, south sinai government.<br>Egypt</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/call-icon.png" id="ii">
                            <p class="email-text"><a href="#">0100 175 3226</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/email-icon.png" id="j">
                            <p class="email-text"><a href="#">sharmelsheikhcollege@yahoo.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</footer>



<div id="Lightbox" class="modal">

 <span class="close pointer" onclick="closeLightbox()">&times;</span>
 <div class="modal-content">
  <div class="slide">
   <img src="https://static.pexels.com/photos/385997/pexels-photo-385997.jpeg" class="image-slide" alt="Toy car on the road." />
  </div>
  <div class="slide">
   <img src="https://static.pexels.com/photos/574521/pexels-photo-574521.jpeg" class="image-slide" alt="Toy car exploring offroad." />
  </div>
  <div class="slide">
   <img src="https://static.pexels.com/photos/386009/pexels-photo-386009.jpeg" class="image-slide" alt="Toy car in the city." />
  </div>

  <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
  <a class="next" onclick="changeSlide(1)">&#10095;</a>

  <div class="dots">
   <div class="col">
    <img src="https://static.pexels.com/photos/385997/pexels-photo-385997.jpeg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="Toy Car Touring City">
   </div>
   <div class="col">
    <img src="https://static.pexels.com/photos/574521/pexels-photo-574521.jpeg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="Toy Car Touring City">
   </div>
   <div class="col">
    <img src="https://static.pexels.com/photos/386009/pexels-photo-386009.jpeg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="Toy Car Touring City">
   </div>
  </div>
 </div>
</div>









<div id="Lightbox2" class="modal" >

 <span class="close pointer" onclick="closeLightbox2()">&times;</span>
 <div class="modal-content">
  <div class="slide2">
   <img src="images/c.jpg" class="image-slide" alt="lab1" id="jj" />
  </div>
  <div class="slide"2>
   <img src="images/c.jpg" class="image-slide" alt="lab2" />
  </div>
  <div class="slide"2>
   <img src="images/c.jpg" class="image-slide" alt="lab3" />
  </div>

  <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
  <a class="next" onclick="changeSlide(1)">&#10095;</a>

  <div class="dots">
   <div class="col">
    <img src="images/c.jpg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="lab">
   </div>
   <div class="col">
    <img src="images/c.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="lab2">
   </div>
   <div class="col">
    <img src="images/c.jpg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="lab3">
   </div>
  </div>
 </div>
</div>



<div id="Lightbox3" class="modal">

 <span class="close pointer" onclick="closeLightbox3()">&times;</span>
 <div class="modal-content">
  <div class="slide2">
   <img src="images/mus.jpg" class="image-slide" alt="mus1" id="k" />
  </div>
  <div class="slide"2>
   <img src=".jpg" class="image-slide" alt="mus2" />
  </div>
  <div class="slide"2>
   <img src="images/mus.jpg" class="image-slide" alt="mus3" />
  </div>

  <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
  <a class="next" onclick="changeSlide(1)">&#10095;</a>

  <div class="dots">
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="mus1">
   </div>
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="mus2">
   </div>
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="mus3">
   </div>
  </div>
 </div>
</div>

<div id="Lightbox4" class="modal">

 <span class="close pointer" onclick="closeLightbox4()">&times;</span>
 <div class="modal-content">
  <div class="slide2">
   <img src="images/mus.jpg" class="image-slide" alt="mus11" id="kk" />
  </div>
  <div class="slide"2>
   <img src=".jpg" class="image-slide" alt="mus22" />
  </div>
  <div class="slide"2>
   <img src="images/mus.jpg" class="image-slide" alt="mus33" />
  </div>

  <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
  <a class="next" onclick="changeSlide(1)">&#10095;</a>

  <div class="dots">
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="mus11">
   </div>
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="mus22">
   </div>
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="mus33">
   </div>
  </div>
 </div>
</div>


<div id="Lightbox5" class="modal">

 <span class="close pointer" onclick="closeLightbox5()">&times;</span>
 <div class="modal-content">
  <div class="slide2">
   <img src="images/mus.jpg" class="image-slide" alt="mus111" id="l" />
  </div>
  <div class="slide"2>
   <img src=".jpg" class="image-slide" alt="mus222" />
  </div>
  <div class="slide"2>
   <img src="images/mus.jpg" class="image-slide" alt="mus333" />
  </div>

  <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
  <a class="next" onclick="changeSlide(1)">&#10095;</a>

  <div class="dots">
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="mus111">
   </div>
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="mus222">
   </div>
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="mus333">
   </div>
  </div>
 </div>
</div>

<div id="Lightbox6" class="modal">

 <span class="close pointer" onclick="closeLightbox6()">&times;</span>
 <div class="modal-content">
  <div class="slide2">
   <img src="images/mus.jpg" class="image-slide" alt="mus1111" id="ll" />
  </div>
  <div class="slide"2>
   <img src=".jpg" class="image-slide" alt="mus2222" />
  </div>
  <div class="slide"2>
   <img src="images/mus.jpg" class="image-slide" alt="mus3333" />
  </div>

  <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
  <a class="next" onclick="changeSlide(1)">&#10095;</a>

  <div class="dots">
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="mus1111">
   </div>
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="mus2222">
   </div>
   <div class="col">
    <img src="images/mus.jpg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="mus3333">
   </div>
  </div>
 </div>


<script type="text/javascript">
var slideIndex = 1;
showSlide(slideIndex);


function openLightbox() {
  document.getElementById('Lightbox').style.display = 'block';
}

function closeLightbox() {
  document.getElementById('Lightbox').style.display = 'none';
}




function openLightbox2() {
  document.getElementById('Lightbox2').style.display = 'block';
}

function closeLightbox2() {
  document.getElementById('Lightbox2').style.display = 'none';
}
function openLightbox3() {
  document.getElementById('Lightbox3').style.display = 'block';
}

function closeLightbox3() {
  document.getElementById('Lightbox3').style.display = 'none';
}

function openLightbox4() {
  document.getElementById('Lightbox4').style.display = 'block';
}

function closeLightbox4() {
  document.getElementById('Lightbox4').style.display = 'none';
}
function openLightbox5() {
  document.getElementById('Lightbox5').style.display = 'block';
}

function closeLightbox5() {
  document.getElementById('Lightbox5').style.display = 'none';
}
function openLightbox6() {
  document.getElementById('Lightbox6').style.display = 'block';
}

function closeLightbox6() {
  document.getElementById('Lightbox6').style.display = 'none';
}

 

function changeSlide(n) {
  showSlide(slideIndex += n);
}

function toSlide(n) {
  showSlide(slideIndex = n);
}

function showSlide(n) {

  const slides = document.getElementsByClassName('slide');
  let modalPreviews = document.getElementsByClassName('modal-preview');

  if (n > slides.length) {
    slideIndex = 1; 
  }
  
  if (n < 1) {
    slideIndex = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (let i = 0; i < modalPreviews.length; i++) {
      modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
  }
  
  slides[slideIndex - 1].style.display = 'block';
  modalPreviews[slideIndex - 1].className += ' active';
}

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "sidetab") {
    x.className += " responsive";
  } else {
    x.className = "sidetab";
  }
}
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) 
    {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</script>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


 <style type="text/css">
   
   


.col{
  width: calc(25% - 2rem);
  margin: 1rem;
  cursor: pointer;
}





 </style>

 <?php 
$contact = new contact;
  if(isset($_POST['submit'])){

$int=$_POST["number"];
$e=$_POST["email"];


 if (filter_var($e, FILTER_VALIDATE_EMAIL )) {

if (filter_var($int, FILTER_VALIDATE_INT)) {

 

$contact->name=$_POST["name"];
$contact->email=$_POST["email"];
$contact->number=$_POST["number"];
$contact->enrolled=$_POST["enrolled"];
$contact->question=$_POST["question"];

  $contact->insertcontact();
header("Location:about.php"); 
 }

 else {
    echo ('<script type="text/javascript">alert("  enter a valid number must be a numeric value")</script>');
    header("Location:about.php");
}

}
else{
    echo ('<script type="text/javascript">alert("  enter a valid email")</script>');
    header("Location:about.php");
}
}


  ?>
