<?php
include("includes/headerCoord.php");

if($_SERVER["REQUEST_METHOD"] == "GET") {	
    
    if(isset($_GET['removeApp']) && $_GET['removeApp']!=""){
            $q="DELETE FROM application WHERE appID = '$_GET[removeApp]'";
            $r = mysqli_query($dbc, $q); 
            header('location:applications.php');
  
        } else{
            header('location:coordinator_page.php'); 
       
    }
}else{
    header('logOut.php');
}

?>