<?php
include("includes/headerCoord.php");

?>

<?php

echo "<br><br>";
//View roster and remove volunteers from roster
$query = "SELECT * FROM dropOff";
$run = mysqli_query($dbc, $query);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<table class='tbody'>";
echo "<th>Shelter Name</th><th>Address</th><th>Volunteer</th><th>Date</th><th>Transaction number</th><th>Button</th>";
while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
    echo "<tr>";
    echo "<td>{$row['shelter']} </td><td>{$row['address']}</td> <td>{$row['volunteer_name']} </td><td>{$row['date']} <td>{$row['droppedID']}</td>";
    echo "<td><form method='get' action='removeTra.php'>";
             echo "<input type='hidden' value='$row[droppedID]' name='removeTra'>";
             echo "<input type='submit' value='Delete Transaction'>";
             echo "</form></td>";
    echo "</tr>";
}
echo "</table>";
?>
<form action="searchShelter.php" method="post">
    <h5>Search for transaction by Shelter's name :</h5>
<input type="text" name="namey">
<input type="submit" name="searchSub">
</form>

<?php
echo"</div> </div></div>";
include('includes/footer2.php');
 ?>
