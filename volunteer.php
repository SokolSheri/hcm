<?php
include('includes/functions.php');
$pageTitle = "CompFood";
include('includes/header.php');
 ?>

<img id="volunteer_pic" src="images/volunteer.jpg">
<br>

<div id="under_pic">
<h2>Volunteer</h2>
    <h4>Make a difference!</h4>
    <br>
</div>
<div id="texty">

    <p>Since the inception of CompFood, we have relied on community support to help us expand our services and enrich the lives of New Yorkers. With the help of volunteers, we are able to prepare and deliver meals to those in need.
    </p>
    <br>
    <p>
        There are many differing needs and functions to our organization. We accept volunteers that are skilled chefs, meal-preparers, and overall skilled individuals looking to help from the meal prep process all the way up until delivery. Overall, we are looking to find volunteers that share the same passion for helping others as CompFoods does.
    </p>
    <p>For those interested, please apply below or login if you're an existing volunteer:</p><br>

    </div>
<br>

<div class="container">
<div class="row form2">
  
  	
	<div class="col">
		<h1>Application to Join the Team</h1>
		    <form id="vol_form" action="register_proc.php" method="post">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="password">First Name</label>
              <input type="text" name="firstName" class="form-control" required>
            </div>
            </div>
          <div class="col">
              <div class="form-group">
                <label for="Last Name">Last Name  </label>
                <input type="text" name="lastName" class="form-control" required>
              </div>
          </div>
        </div>
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" name="email" class="form-control" required>
					</div>
				</div>
			</div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="reason">
       Reason for applying : <br> (include positions of interest) </label><br>
        <textarea name="reason" class="form-control2" maxlength="1000" required>
           </textarea>
          </div>
        </div>
      </div>


			<p><input type="submit" value="Apply" name="signup"></p>
		</form>
	</div>
</div>
</div>
<br>

<?php
include('includes/footer.php');
 ?>
