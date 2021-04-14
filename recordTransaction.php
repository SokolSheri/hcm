<?php
include("includes/headerCoord.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {	
    $shelter = mysqli_real_escape_string($dbc,$_POST['shelter']);
    $address = mysqli_real_escape_string($dbc,$_POST['address']);
    $vol = mysqli_real_escape_string($dbc,$_POST['vol']);
    $deliver = mysqli_real_escape_string($dbc,$_POST['deliver']);
    
    $q="INSERT INTO dropOff(shelter,address,volunteer_name,date) VALUES('$shelter','$address','$vol','$deliver')";
            $r = mysqli_query($dbc, $q); 
    header('location:coordinator_page.php');
}

?>