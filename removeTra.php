<?php
include("includes/headerCoord.php");

if($_SERVER["REQUEST_METHOD"] == "GET") {	
    
    if(isset($_GET['removeTra']) && $_GET['removeTra']!=""){
            $q="DELETE FROM dropOff WHERE droppedID = '$_GET[removeTra]'";
            $r = mysqli_query($dbc, $q); 
            header('location:transactions.php');
  
        } else{
            header('location:coordinator_page.php'); 
       
    }
}else{
    header('logOut.php');
}

?>