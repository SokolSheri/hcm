
<?php
include('includes/headerCoord.php');
echo '<br><br>';
$userID=$_SESSION['userID'];
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

   echo "<td><form method='post' action='editInfo.php'>";
    echo "<input type='text' name='editPass' placeholder='Edit Password' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='at least one number and one uppercase and lowercase letter, and at least 8 or more characters'>";


     echo "<br><input type='submit' value='Edit Password'></td>";

    ////

      echo "<td><form method='post' action='editInfo.php'>";
    echo "<input type='text' name='editStreet' placeholder='Edit Street'>";


     echo "<br><input type='submit' value='Edit Street'></form></td>";

     echo "<td><form method='post' action='editInfo.php'>";
    echo "<input type='text' name='editCity' placeholder='Edit City'>";

     echo "<br><input type='submit' value='Edit City'></form></td>";

     echo "<td><form method='post' action='editInfo.php'>";
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

     echo "<td><form method='post' action='editInfo.php'>";
    echo "<input type='text' name='editZip' placeholder='Edit Zip Code' pattern='[0-9]+' minlength='5' maxlength='5'>";


     echo "<br><input type='submit' value='Edit Zip Code'></form></td>";

    echo "</tr>";


}


		echo "</tr>";
echo "</table>";
echo "</div></div></div>";

include('includes/footer2.php');
?>
