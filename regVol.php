<?php
include("includes/headerCoord.php");
/*$sql = "SELECT * FROM users WHERE email = '$_POST[email]'";
	$result = mysqli_query($dbc,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

if($count==1){
    echo "<h1>This user is already registered into the system, please try again</h1>
    <a href='coordinator_page.php'>Go back</a>
    ";
    
}else{*/
    
    $days="";
if(!empty($_POST['a1'])){
    $days= $days.' MON';
}

if(!empty($_POST['a2'])){
    $days= $days.' TUES';
}

if(!empty($_POST['a3'])){
    $days= $days.' WED';
}

if(!empty($_POST['a4'])){
    $days= $days.' THURS';
}

if(!empty($_POST['a5'])){
    $days= 'ALL';
}


$first =strtoupper($_POST['firstName']);
$last =strtoupper($_POST['lastName']);  
$first =mysqli_real_escape_string($dbc,$first);
$last = mysqli_real_escape_string($dbc,$last);
$email = mysqli_real_escape_string($dbc,$_POST['email']);
$pass = mysqli_real_escape_string($dbc,$_POST['password']);
    
    $pass= sha1($pass);
   /* $phone = mysqli_real_escape_string($dbc,$_POST['phone']);*/
    $street = mysqli_real_escape_string($dbc,$_POST['street']);
    $city = mysqli_real_escape_string($dbc,$_POST['city']);
    $state = mysqli_real_escape_string($dbc,$_POST['state']);
    $zip = mysqli_real_escape_string($dbc,$_POST['zip']);
    $avail = mysqli_real_escape_string($dbc,$days);
    $type =$_POST['type'];
$q="INSERT INTO users(first_name,last_name,email,passwordd,street,city,statee,zip,typee,avail) VALUES('$first','$last','$email','$pass','$street','$city','$state',$zip,$type,'$avail')";
            $r = mysqli_query($dbc, $q); 
header("location: coordinator_page.php");

//}
?>
