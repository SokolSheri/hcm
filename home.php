<?php
include('includes/functions.php');
$pageTitle = "CompFood";
include('includes/header.php');
 ?>
<style>
#involved{
  text-shadow: 0 1px 1px black;
  text-align: center;
  color:white;
	position: relative;
	left: 30%;
	background-color:#a3e024;
	border-color:#a3e024;
  border-radius: 3px;
  font-size: 50px;
}

#donate{
  color:white;
  text-shadow: 0 1px 1px black;
  text-align: center;
	position: relative;
	left: 42%;
	background-color:#a3e024;
	border-color:#a3e024;
  border-radius: 3px;
}
</style>

 <div class="container-fluid">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner">
       <div class="item active">
         <img class="img" src="../sessions/images/pic1.png" alt="Veggies">
       </div>

       <div class="item">
         <img class="img" src="../sessions/images/pic2.png" alt="Truck">
       </div>

       <div class="item">
         <img class="img" src="../sessions/images/pic3.png" alt="Food">
       </div>
     </div>

     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
 </div>

<div class="container">
  <div class="row">
    <div class="col">
      <h2> Our Mission</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <p>Our mission is to collect spare produce from participating food retailers and turn them into stunning complimentary meals for New Yorkers in need.</p>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h2> Our Vision</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <p>Don’t Lose - Reuse</p>
    </div>
  </div>
   <div class="row">
    <div class="col">
      <h2>About Us</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <p>Comp Food is a newly created, non-profit company aimed at collecting, cooking and channeling food surplus from restaurants, farms, fast food chains, and grocery stores into the hands of the hungry.
</p>
	    </div>
  </div>
</div><br>
<a href='volunteer.php'>
<button type="button" id="involved"><h1> Get Involved!</h1>
</button></a>
<a href="donate.php">
<button type="button" id="donate"><h1> Donate Now!</h1> </button></a>
<br><br>



<?php
include('includes/footer.php');
 ?>
