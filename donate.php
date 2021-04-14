<?php
include('includes/functions.php');
$pageTitle = "CompFood";
include('includes/header.php');
 ?>

<img src="images/donate_pic.jpg" id="donate_pic">

<div id="under_pic">
<h2>Donations</h2>
    <br>
</div>
<div id="texty">

    <p>CompFoods operates as a non-profit that is self funded. However, though we fund ourselves, donations are greatly appreciated. Donations only allow us to continue to grow faster and solve the hunger problem facing New Yorkers.
    </p>
    <br>
    <p>The issue :</p>

    <p>
        Roughly 1.2 million New Yorkers face hunger every year, including one in five New York City children.
    </p>
    <br>
            <p>For those interested in donating to help us fight hunger, please fillout donation form below :</p>

    </div>
<br>

<div class="row">
  <div class="col-4">

  </div>
  <div class="col-4 form2">
    <h1>Donate</h1>
      <form id="don_form" action="donationProc.php" method="post">
      <div class="form-group">
        <label for="name">Name on Card:</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="num">Card Number:</label> 
           <input type="text" name="num" required pattern='[0-9]+' maxlength=19 required>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="cvc">CVC:</label> 
            <input type="text" name="cvc" required pattern='[0-9]+' minlength=3 maxlength=3 required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exp">Expiration Date</label> <input type="date" name="exp" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="amount">Amount</label> <input type="number" name="amount" class="form-control" required>
      </div>
      <p><input type="submit" value="Donate Now!"></p>
    </form>
  </div>
  <div class="col-4">

  </div>
</div>





<br><br>








<?php
include('includes/footer.php');
 ?>
