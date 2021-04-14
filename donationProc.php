<?php
include('includes/functions.php');
$pageTitle = "CompFood";
include('includes/header.php');
include('includes/mysqli_connect.php');
$amount = mysqli_real_escape_string($dbc,$_POST['amount']);


$q="INSERT INTO moneyDonors(amount) VALUES('$amount')";
            $r = mysqli_query($dbc, $q);

echo "<br><br><br><br><br><br><br><h1 class='center'>Thank you for your donation!</h1>";


?>

<?php
include('includes/footer2.php');
 ?>
