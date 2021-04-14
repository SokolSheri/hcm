<?php
include('includes/functions.php');
$pageTitle = "CompFood";
include('includes/header.php');
session_start();

error_reporting(0);


if($_SESSION['retry']==1){
    echo "<script type='text/javascript'>alert('Email/Password combination incorrect, try again');</script>";
}

$_SESSION['retry']=0;


?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col">

        </div>
        <div class="col form2">
          <h2>Login</h2>
  <form id='formy' action='login.php' method='post'>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <input type="email" id="email" name="emailLogin" placeholder="&nbsp;&nbsp;&nbsp;Email" required><br>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <input type="password" id="password" name="passLogin" placeholder="&nbsp;&nbsp;&nbsp;Password" required><br>
          </div>
        </div>
      </div>
      <button type='submit' value='submit' id='log'>LOG IN</button><br><br>
    </form>
        </div>
        <div class="col">

        </div>
      </div>
    </div>


<?php

include('includes/footer2.php');


?>
