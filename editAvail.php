<?php
include("includes/headerVol.php");


$days="";
if(!empty($_GET['a1'])){
    $days= $days.' MON';
}

if(!empty($_GET['a2'])){
    $days= $days.' TUES';
}

if(!empty($_GET['a3'])){
    $days= $days.' WED';
}

if(!empty($_GET['a4'])){
    $days= $days.' THURS';
}

if(!empty($_GET['a5'])){
    $days= 'ALL';
}


if($_SESSION['type']!=2){
    header("location: logOut.php");
}
if($_SERVER["REQUEST_METHOD"] == "GET") {
    
            $q="UPDATE users
SET avail = '$days'
WHERE userID = '$_SESSION[userID]'";
            $r = mysqli_query($dbc, $q); 
    
    $_SESSION['al']=1;
            header('location:volunteer_page.php');
  
}else{
    header('logOut.php');
}


?>