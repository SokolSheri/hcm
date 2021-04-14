<?php
include("includes/headerCoord.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {	
    $ident = mysqli_real_escape_string($dbc,$_POST['ident']);
    $descrip = mysqli_real_escape_string($dbc,$_POST['descrip']);
    $location = mysqli_real_escape_string($dbc,$_POST['location']);
    $day = mysqli_real_escape_string($dbc,$_POST['day']);
    $q="INSERT INTO schedule(userID,volRole,location,day) VALUES('$ident','$descrip','$location','$day')";
            $r = mysqli_query($dbc, $q); 
    header('location:coordinator_page.php');
}

?>