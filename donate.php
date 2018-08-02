<?php

require 'layouts/header.php';
$main = new Main;
$main->checkdonate();

if(isset($_POST['fullname'])){
  $main->securepayment($_POST, $_GET['id']);
}

?>
<br><br><br>
<div class="col-md-8 offset-md-2">

  <p class="">Please make a small donation to support the author of this book.</b></p>
  
  <!-- <p class=""><a href="/install/2" class="btn btn-primary btn-sm">Install!</a></p><br><br> -->

<form action="" method="post">
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Fullname</label>
      <input type="text" name="fullname" autocomplete="off" class="form-control" required placeholder="Samuel Ezedi">
      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" autocomplete="off" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Currency</label>
      <select name="currency" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
          <option value="NGN">NGN</option>
          <option value="GHS">GHS</option>
          <option value="USD">USD</option>
          <!-- <option va></option> -->
      </select>
      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Amount</label>
      <input type="number" name="amount" autocomplete="off" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0.00" required>
      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>

      
    <button type="submit" class="btn btn-primary">Donate </button>
  </fieldset>
</form>
<Br>
   <a href="destroy" class="btn btn-sm btn-danger pull-left">Go back home page</a>
<br><br>
</div>

<?php

  require 'layouts/footer.php';
?>