<?php
include("includes/headerCoord.php");
?>


<?php


$sql = "SELECT * FROM application WHERE checked=0";
	$result2 = mysqli_query($dbc,$sql);

	$count = mysqli_num_rows($result2);

echo "<h4 class='top'>Unread applications : <a href='applications.php'>{$count}</a></h4>";

$quer = "SELECT * FROM foodDonors";
	$resul = mysqli_query($dbc,$quer);

	$c = mysqli_num_rows($resul);

echo "<h4 class='top'>Food donations : <a href='viewFood.php'>{$c}</a></h4>";


//View roster and remove volunteers from roster
$query = "SELECT * FROM users ORDER BY typee ASC";
$run = mysqli_query($dbc, $query);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<h3 class='center'> Team Members </h3> <br>";
echo "<table class='tbody'>";
echo "<tr>";
    echo "<th>First Name</th><th>Last Name</th><th>Type of Volunteer</th><th>Email</th><th>Volunteer ID</th><th>Availability</th><th>Delete</th>";
echo "</tr>";
while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){

    if($row['userID']==$_SESSION['userID']  || $row['typee']==3){
        continue;
    }else{
             echo "<tr>
             <td>{$row['first_name']}</td><td>{$row['last_name']} </td><td>{$row['typee']}</td> <td>{$row['email']} </td><td>{$row['userID']} </td><td>{$row['avail']} </td>";
    
        
            echo "<td><form method='get' action='removeVol.php'>";
             echo "<input type='hidden' value='$row[userID]' name='removeVol'>";
             echo "<input type='submit' value='Remove Volunteer'>";
             echo "</form></td></tr>";
		 }
}
echo "</table></div></div</div>";
?>
<br><br>
<div class="container">
	<div class="row form2">
		<div class="col" id="register">
			<h3>Register Volunteer</h3>
			<!-- register a volunteer -->
			<form action="regVol.php" method="post">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="firstName">First Name :</label>
						<input type="text" name="firstName" required>
					</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="lastName">Last Name :</label>
					<input type="text" name="lastName" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="email">Email Address :</label>
					<input type="email" name="email" required>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="password">Password :</label>
					<input type="text" name="password" required pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='at least one number and one uppercase and lowercase letter, and at least 8 or more characters'>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="">Availability :</label>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="a1">(Mon) :
				<input type="checkbox" name="a1" value="MON"></label>
			</div>
			<div class="col">
				<label for="a2">(Tues) :
				<input type="checkbox" name="a2" value="TUES"></label>
			</div>
			<div class="col">
				<label for="a3">(Wed) :
				<input type="checkbox" name="a3"></label>
			</div>
			<div class="col">
				<label for="a4">(Thurs) :
				<input type="checkbox" name="a4"></label>
			</div>
			<div class="col">
				<label for="a5">(All) :
				<input type="checkbox" name="a5"></label>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="street">Street :</label>
					<input type="text" name="street" required>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="city">City :</label>
					<input type="text" name="city" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="state">State :</label>
					<select name="state" required>
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
					</select>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="zip">Zip Code :</label>
					<input type="text" name="zip" required pattern='[0-9]+' minlength=5 maxlength=5>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="type">Volunteer type :</label>
					<select name="type" required>
						<option value="1">Coordinator</option>
						<option value="2">Volunteer</option>
						<option value="3">Food donor</option>
					    </select>
				</div>
			</div>
		</div>
		<input type="submit" value="Register Volunteer" name="subRegVol">
		</form>
	</div> <!--end of first col -->
	<div class="border4"></div>
		<div class="col-6">
			<h3 id="schedule">Schedule Volunteer</h3>
			<form action="makeSchedule.php" method="post">
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="ident">Volunteer ID :</label>
							<input type="number" name="ident">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="descrip">Job Assignment :</label>
							<textarea name="descrip"> </textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="location">Work Location :</label>
							<input type="text" name="location">
						</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="day">Date Working	:</label>
								<input type="date" name="day">
						</div>
					</div>
				</div>
				<br>
				<input type="submit" value="Submit Schedule">
				</form>

		</div>
	</div>
	<div class="row form2">
		<div class="col">
			<h3 id="transaction">Record Transaction</h3>
			<form action="recordTransaction.php" method="post">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="shelter">Shelter :</label>
						<input type="text" name="shelter">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="address">Address :</label>
						    <input type="text" name="address">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="vol">Volunteer Name :</label>
						<input type="text" name="vol">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="deliver">Date of delivery :</label>
				<input type="date" name="deliver">
					</div>
				</div>
			</div>
			<input type="submit" value="Submit Record">

			</form>
		</div>
	</div>
</div>



<!--<label for="phone">Contact Number :</label>
<input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required> -->


<div class="container">
	<div class="row">
		<div class="col">
			<form action="search.php" method="post">
			    <h4>Search for volunteer by last name :</h4>
			<input type="text" name="last">
			<input type="submit" name="searchSub">
			</form>
		</div>
	</div>
</div>





<?php
include('includes/footer.php');
 ?>
