<?php
include("includes/headerCoord.php");

if($_SERVER["REQUEST_METHOD"] == "GET") {	
    
    if(isset($_GET['removeFd']) && $_GET['removeFd']!=""){
            $q="DELETE FROM foodDonors WHERE foodID = '$_GET[removeFd]'";
            $r = mysqli_query($dbc, $q); 
            header('location:viewFood.php');
  
        } else{
            header('location:coordinator_page.php'); 
       
    }
}else{
    header('logOut.php');
}

?>