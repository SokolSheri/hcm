<?php
include("includes/headerCoord.php");

$last =strtoupper($_POST['last']);
$last =trim($last);
$last = mysqli_real_escape_string($dbc,$last);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT * FROM users WHERE last_name = '{$last}'";
$run = mysqli_query($dbc, $query);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<table>";
echo "<tr>";
    echo "<th>First Name</th><th>Last Name</th><th>Type of Volunteer</th><th>Email</th><th>Volunteer ID</th><th>Availability</th><th>Delete</th>";
echo "</tr>";

while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
    echo "<tr>
             <td>{$row['first_name']}</td><td>{$row['last_name']} </td><td>{$row['typee']}</td> <td>{$row['email']} </td><td>{$row['userID']} </td><td>{$row['avail']}</td>";
            echo "<td><form method='get' action='removeVol.php'>";
             echo "<input type='hidden' value='$row[userID]' name='removeVol'>";
             echo "<input type='submit' value='Remove Volunteer'>";
             echo "</form></td></tr>";
}
    echo "</table></div></div></div>";
}

?>
<div class="container">
  <div class="row">
    <div class="col">
      <form action="makeSchedule.php" method="post">
      <h3>Schedule Volunteer</h3>
      <label for="ident">Volunteer ID :</label>
      <input type="number" name="ident">
      <label for="descrip">Job Assignment :</label>
      <textarea name="descrip">

          </textarea>
      <label for="location">Work Location :</label>
      <input type="text" name="location">
      <br>
      <br>
          <label for="day">Work Date :</label>
      <input type="date" name="day">
      <input type="submit" value="Submit Schedule">


      </form>
    </div>
  </div>
</div>


<?php

include("includes/footer2.php");
 ?>
