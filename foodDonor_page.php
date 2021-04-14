<?php
include('includes/headerFood.php');

error_reporting(0);



if($_SESSION['filled']==1){
    echo "<script type='text/javascript'>alert('Your food ingredients have been submitted!');</script>";
                      }

$_SESSION['filled']=0;



?>

 <?php
    echo "<h3>Hello, ".$_SESSION['login_user']."!</h3>";

    echo "<br><br>";
    ?>
<div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col-4 form2">
        <h1>Ingredients Form</h1>
          <form id="don_form" action="foodProc.php" method="post">
          <div class="form-group">
            <label for="ing">Ingredients</label>
            <textarea name="ing"></textarea>
          </div>
          <div class="form-group">
            <label for="num">Pickup Date:</label>
               <input type="date" name="date" required>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="timey">Time:</label>
                <input type="time" name="timey" required>
              </div>
            </div>

          </div>

          <p><input type="submit" value="Submit"></p>
        </form>
      </div>
      <div class="col">

      </div>

  </div>
</div>



<?php

include('includes/footer2.php');
 ?>
