<?php
include("includes/headerCoord.php");

if($_SERVER["REQUEST_METHOD"] == "GET") {	
    
    if(isset($_GET['removeVol']) && $_GET['removeVol']!=""){
            $q="DELETE FROM users WHERE userID = '$_GET[removeVol]'";
            $r = mysqli_query($dbc, $q); 
            header('location:coordinator_page.php');
  
        } else{
            header('location:coordinator_page.php'); 
       
    }
}else{
    header('logOut.php');
}

?>