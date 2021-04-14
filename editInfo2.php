
<?php

include('includes/headerVol.php');



if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    
    
    if(!empty($_POST['editPass'])){
        
        
       $pass = mysqli_real_escape_string($dbc,$_POST['editPass']);
        $pass= sha1($pass);
        
           $q="UPDATE users
SET passwordd = '$pass'
WHERE userID = '$_SESSION[userID]'";
            $r = mysqli_query($dbc, $q); 
    
    
            header('location:volunteer_page.php');
  
    }else if(!empty($_POST['editStreet'])){
        
        
       $street = mysqli_real_escape_string($dbc,$_POST['editStreet']);
        
        
           $q="UPDATE users
SET street = '$street'
WHERE userID = '$_SESSION[userID]'";
            $r = mysqli_query($dbc, $q); 
    
    
              header('location:volunteer_page.php');
  
  
    }else if(!empty($_POST['editCity'])){
        
        
       $city = mysqli_real_escape_string($dbc,$_POST['editCity']);
        
        
           $q="UPDATE users
SET city = '$city'
WHERE userID = '$_SESSION[userID]'";
            $r = mysqli_query($dbc, $q); 
    
    
              header('location:volunteer_page.php');
  
        
    }else if(!empty($_POST['editState'])){
        
        
       $state = mysqli_real_escape_string($dbc,$_POST['editState']);
        
        
           $q="UPDATE users
SET statee = '$state'
WHERE userID = '$_SESSION[userID]'";
            $r = mysqli_query($dbc, $q); 
    
    
              header('location:volunteer_page.php');
  
        
    }else if(!empty($_POST['editZip'])){
        
        $zip = mysqli_real_escape_string($dbc,$_POST['editZip']);
        
        
           $q="UPDATE users
SET zip = '$zip'
WHERE userID = '$_SESSION[userID]'";
            $r = mysqli_query($dbc, $q); 
    
    
              header('location:volunteer_page.php');
  
        
            
    }else{
          header('location:volunteer_page.php');
  
    }
    
}else{
    header('logOut.php');
}

?>