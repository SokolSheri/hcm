<?php
include("includes/headerCoord.php");
if($_SERVER["REQUEST_METHOD"] == "GET") {	
    
    if(isset($_GET['readIt']) && $_GET['readIt']!=""){
            $q="UPDATE foodDonor
SET checked = 1
WHERE foodID = '$_GET[readIt]'";
            $r = mysqli_query($dbc, $q); 
            header('location:viewFood.php');
  
        } else{
            header('location:coordinator_page.php'); 
       
    }
}else{
    header('logOut.php');
}

?>