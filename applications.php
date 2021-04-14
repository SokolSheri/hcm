<?php
include("includes/headerCoord.php");
 ?>




<?php

echo "<br><br>";
$query = "SELECT * FROM application ORDER BY checked ASC";
$run = mysqli_query($dbc, $query);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<table class='tbody'>";
echo "<tr>";
    echo "<th>First Name</th><th>Last Name</th><th>Email</th><th>Description</th><th>Button 1</th><th>Button 2</th>";
echo "</tr>";
while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
    echo "<tr>";
    echo "<td>{$row['first_name']} </td><td>{$row['last_name']}</td> <td>{$row['email']}</td> <td>{$row['descriptionn']}</td>";
    echo "<td><form method='get' action='removeApp.php'>";
             echo "<input type='hidden' value='$row[appID]' name='removeApp'>";
             echo "<input type='submit' value='Delete Application'>";
             echo "</form></td>";
    echo "<td><form method='get' action='readIt.php'>";
             echo "<input type='hidden' value='$row[appID]' name='readIt'>";
             echo "<input type='submit' value='Mark as read'>";
             echo "</form></td>";
    echo "</tr>";
}
echo "</table>";
?>

<form action="searchApp.php" method="post">
    <h5>Search for application by last name :</h5>
<input type="text" name="last">
<input type="submit" name="searchSub">
</form>
<?php
echo"</div></div></div>";
include('includes/footer2.php');
 ?>
