
<?php
include("includes/headerCoord.php");
?>
<?php
$last =strtoupper($_POST['last']);
$last =trim($last);
$last = mysqli_real_escape_string($dbc,$last);

echo "<br><br>";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT * FROM application WHERE last_name = '{$last}'";
$run = mysqli_query($dbc, $query);
echo "<div class='container'> <div class='row'> <div class='col'>";
echo "<table>";
echo "<tr>";
    echo "<th>First Name</th><th>Last Name</th><th>Email</th><th>Description</th><th>Button 1</th><th>Button 2</th>";
echo "</tr>";
while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
     echo "<tr>";
    echo "<td>{$row['first_name']} </td><td>{$row['last_name']}</td> <td>{$row['email']}</td> <td>{$row['description']}</td>";
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
echo "</table></div></div></div>";
}

include("includes/footer2.php");
?>
