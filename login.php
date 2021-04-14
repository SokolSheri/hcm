<?php
include("includes/mysqli_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = mysqli_real_escape_string($dbc,$_POST['emailLogin']);
	$password = mysqli_real_escape_string($dbc,$_POST['passLogin']);
   $password= sha1($password);
	
	$sql = "SELECT * FROM users WHERE email = '$email' and passwordd = '$password'";
	$result = mysqli_query($dbc,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['userID'];
	
	$count = mysqli_num_rows($result);
	
	if($count == 1){
        $_SESSION['address']=$row['street'];
		$_SESSION['login_user'] = $email;
        $_SESSION['userID']=$active;
         $_SESSION['type']=$row['typee'];
        if($_SESSION['type'] == 1){
            header("location: coordinator_page.php");
	}else if($_SESSION['type'] == 2){
       header("location: volunteer_page.php");
    }else{
          header("location: foodDonor_page.php");  
        }
}else{
         $_SESSION['retry']=1;
        header("location: portalHome.php");
    }
}
?>