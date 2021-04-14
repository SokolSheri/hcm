<?php
include('includes/functions.php');
$pageTitle = "CompFood";
include('includes/header.php');

include("includes/mysqli_connect.php");
$q="INSERT INTO application(first_name,last_name,email,descriptionn,checked) VALUES('$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[reason]',0)";
            $r = mysqli_query($dbc, $q);



?>

<br><br><br><br><br><br><br><br>

<h1 class="center">Thank you for your application! A coordinator will reach out to you shortly!</h1>
