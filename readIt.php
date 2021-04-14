<?php
include("includes/headerCoord.php");
if($_SERVER["REQUEST_METHOD"] == "GET") {	
    
    if(isset($_GET['readIt']) && $_GET['readIt']!=""){
            $q="UPDATE application
SET checked = 1
WHERE appID = '$_GET[readIt]'";
            $r = mysqli_query($dbc, $q); 
            header('location:applications.php');
  
        } else{
            header('location:coordinator_page.php'); 
       
    }
}else{
    header('logOut.php');
}

?>