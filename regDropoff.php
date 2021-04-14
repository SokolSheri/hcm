<?php
include("includes/headerCoord.php");

$sql = "SELECT * FROM users WHERE email = '$_POST[email]'";
	$result = mysqli_query($dbc,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

if($count==1){
    echo "<h1>This user is already registered into the system, please try again</h1>
    <a href='coordinator_page.php'>Go back</a>
    ";
    
}else{    

$first =strtoupper($_POST['firstName']);
$last =strtoupper($_POST['lastName']);   
$q="INSERT INTO users(first_name,last_name,email,password,phone,street,city,state,zip,type) VALUES('$first','$last','$_POST[email]','$_POST[password]',$_POST[phone],'$_POST[street]','$_POST[city]','$_POST[state]',$_POST[zip],$_POST[type])";
            $r = mysqli_query($dbc, $q); 
header("location: coordinator_page.php");

}
?>
