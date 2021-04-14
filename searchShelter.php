<?php
include("includes/headerCoord.php");
$name =strtoupper($_POST['namey']);
$name =trim($name);
$name = mysqli_real_escape_string($dbc,$name);
echo "<br><br>";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT * FROM dropOff WHERE shelter = '{$name}'";
$run = mysqli_query($dbc, $query);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<table>";
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
    echo "</table></div></div></div>";
}

include("includes/footer2.php");
?>
