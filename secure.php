<?php

require 'layouts/header.php';
$main = new Main;
$main->checkdonate();

if(isset($_POST['fullname'])){
  $main->securepayment($_POST, $_GET['id']);
}

if(isset($_GET['pay'])){
  if($_GET['pay'] == 1){
    $main->proceedpayment();
  }
}
?>
<br><br><br>
<div class="col-md-8 offset-md-2">

  <p class="">Verify Items.</b></p>
  
  <!-- <p class=""><a href="/install/2" class="btn btn-primary btn-sm">Install!</a></p><br><br> -->
  <table class="table table-hover table-striped">
 
  <tbody>
    <tr >
      <th scope="row">Fullname</th>
      <td><?php echo $_SESSION['payment']['fullname'];?></td>
      
    </tr>
    <tr >
      <th scope="row">Amount</th>
      <td><?php echo $_SESSION['payment']['amount'];?></td>
      
    </tr>
    <tr >
      <th scope="row">Currency</th>
      <td><?php echo $_SESSION['payment']['currency'];?></td>
      
    </tr>
    <tr >
      <th scope="row">Transaction ID</th>
      <td><?php echo $_SESSION['payment']['ref'];?></td>
      
    </tr>
    <tr >
      <th scope="row">Book Name</th>
      <td><?php echo $_GET['id'];?></td>
    </tr>
  </tbody>
</table> 
   <a href="secure?id=<?php echo $_GET['id']; ?>&pay=1" class="btn btn-sm btn-success pull-right">Pay</a>
   <a href="destroy" class="btn btn-sm btn-danger pull-left">Cancel</a>
<br><br>
</div>

<?php

	require 'layouts/footer.php';
?>