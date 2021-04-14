<?php

include('includes/headerFood.php');

$usy = $_SESSION['userID'];

$ing = mysqli_real_escape_string($dbc,$_POST['ing']);
$date = mysqli_real_escape_string($dbc,$_POST['date']);
$timey = mysqli_real_escape_string($dbc,$_POST['timey']);

$str=$_SESSION['address'];


$q="INSERT INTO foodDonors(userID,pickUpDay,pickUpTime,foodDes,address) VALUES('$usy','$date','$timey','$ing','$str')";
            $r = mysqli_query($dbc, $q);
$_SESSION['filled']=1;
header("location: foodDonor_page.php");
?>

<?php
include('includes/footer.php');
 ?>
