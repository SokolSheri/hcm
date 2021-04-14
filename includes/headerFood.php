<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php
include('includes/functions.php');
include("includes/mysqli_connect.php");
$pageTitle = "CompFood";
session_start();


if($_SESSION['type']!=3){
    header("location: logOut.php");
}
 ?>
    <title><?php title($pageTitle); ?></title>
    <link rel="icon" href="../sessions/images/favicon-32x32.png" type="image/png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../sessions/css/compfood.css" type="text/css">

     <style>
     ul {
       list-style-type: none;
       margin: 0;
       padding: 0;
       overflow: hidden;
       border: 1px solid #e7e7e7;
       background-color: #f3f3f3;
       text-decoration: none;
       position:fixed;
       list-style-type: none;
       top: 0;
       width: 100%;
       z-index: 9999;
     }

     li {
       float: left;
     }

     li a {
       display: block;
       color: green;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
     }

     li a:hover:not(.active) {
       background-color: #ddd;
       text-decoration: none;
     }
    li.right {float: right;}
         
         td{
             overflow: scroll;
             padding-bottom: 15px;
         }

     </style>
    </head><body>
<ul>
    <li><a href="foodDonor_page.php">Home</a></li>
<li><a href="personInfo2.php">Edit Information</a></li>
  <li class="right">  <a href="logOut.php">Log Out</a></li>
</ul>
<br><br>
