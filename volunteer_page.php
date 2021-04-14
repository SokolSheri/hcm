<?php
include('includes/headerVol.php');

error_reporting(0);

$userID=$_SESSION['userID'];

if($_SESSION['al']==1){
    echo "<script type='text/javascript'>alert('Your availability has been updated!');</script>";
                      }

$_SESSION['al']=0;

 ?>
<br>
<div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col">
      <form action="editAvail.php" method="get">
      <h3>Update Availability :</h3>
      <label for="a1">(Mon) :
      <input type="checkbox" name="a1" value="MON"></label>
      <label for="a2">(Tues) :
      <input type="checkbox" name="a2" value="TUES"></label>
      <label for="a3">(Wed) :
      <input type="checkbox" name="a3"></label>
      <label for="a4">(Thurs) :
      <input type="checkbox" name="a4"></label>
      <label for="a5">(All) :
      <input type="checkbox" name="a5"></label>
      <input type="submit" name="editAvail">
      </form>
    </div>
    <div class="col">

    </div>
  </div>
</div>


<?php

$query2 = "SELECT * FROM users WHERE userID='$userID'";
$run2 = mysqli_query($dbc, $query2);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<table class='tbody'>";
echo "<tr>";
    echo "<th>Password</th><th>Street</th><th>City</th><th>State</th><th>Zip</th>";
echo "</tr>";
while($row2 = mysqli_fetch_array($run2, MYSQLI_ASSOC)){

    echo "<tr>";
     echo "<td>Enter New Password :</td>";
     echo "<td>{$row2['street']}</td>";
    echo "<td>{$row2['city']}</td>";
    echo "<td>{$row2['statee']}</td>";
    echo "<td>{$row2['zip']}</td>";
		echo "</tr>";

    echo "<tr>";


    /////

   echo "<td><form method='post' action='editInfo2.php'>";
    echo "<input type='text' name='editPass' placeholder='Edit Password' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='at least one number and one uppercase and lowercase letter, and at least 8 or more characters'>";


     echo "<br><input type='submit' value='Edit Password'></td>";

    ////

      echo "<td><form method='post' action='editInfo2.php'>";
    echo "<input type='text' name='editStreet' placeholder='Edit Street'>";


     echo "<br><input type='submit' value='Edit Street'></form></td>";

     echo "<td><form method='post' action='editInfo2.php'>";
    echo "<input type='text' name='editCity' placeholder='Edit City'>";

     echo "<br><input type='submit' value='Edit City'></form></td>";

     echo "<td><form method='post' action='editInfo2.php'>";
    echo '<select name="editState">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>';


     echo "<br><input type='submit' value='Edit State'></form></td>";

     echo "<td><form method='post' action='editInfo2.php'>";
    echo "<input type='text' name='editZip' placeholder='Edit Zip Code' pattern='[0-9]+' minlength='5' maxlength='5'>";


     echo "<br><input type='submit' value='Edit Zip Code'></form></td>";

    echo "</tr>";


}


		echo "</tr>";
echo "</table>";
echo "</div></div></div>";
?>


<?php

$query = "SELECT * FROM schedule WHERE userID =$userID ORDER BY Day DESC";
$run = mysqli_query($dbc, $query);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<table class='tbody'>";
echo "<tr>";
    echo "<th>Work Day</th><th>Role</th><th>Job Location</th>";
echo "</tr>";
while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
    echo "<tr>";
    echo "<td>{$row['Day']}</td>";
     echo "<td>{$row['volRole']}</td>";
     echo "<td>{$row['location']}</td>";
     
		echo "</tr>";

}
echo "</table>";
echo"</div></div></div>";
?>


<?php

include('includes/footer.php');
 ?>
