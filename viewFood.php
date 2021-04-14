<?php
include("includes/headerCoord.php");
 ?>




<?php

echo "<br><br>";
$query = "SELECT * FROM foodDonors ORDER BY pickUpDay DESC";
$run = mysqli_query($dbc, $query);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<table class='tbody'>";
echo "<tr>";
    echo "<th>ID</th><th>Address</th><th>Pick Up Day</th><th>Pick Up Time</th><th>Food</th><th>Button</th>";
echo "</tr>";
while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
    echo "<tr>";
    echo "<td>{$row['userID']} </td><td>{$row['address']}</td> <td>{$row['pickUpDay']}</td> <td>{$row['pickUpTime']}</td><td>{$row['foodDes']}</td>";
    echo "<td><form method='get' action='removeFd.php'>";
             echo "<input type='hidden' value='$row[foodID]' name='removeFd'>";
             echo "<input type='submit' value='Delete'>";
             echo "</form></td>";
    echo "</tr>";
}
echo "</table></div></div></div>";

include('includes/footer2.php');
 ?>
