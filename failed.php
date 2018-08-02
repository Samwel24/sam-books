<?php

require 'layouts/header.php';
$main = new Main;

?>
<br><br><br>
<div class="col-md-8 offset-md-2">

  <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  Opps! there was an issue making payments, please try again later!.
</div><Br><br>
  
  <!--<p class=""><a href="/install/2" class="btn btn-primary btn-sm">Install!</a></p><br><br>-->
  
  <!-- <a href="secure?id=<?php //echo $_GET['id']; ?>&pay=1" class="btn btn-sm btn-success pull-right">Pay</a>-->
   <a href="destroy" class="btn btn-sm btn-primary pull-left">Go back home page</a>
<br><br>
</div>

<?php

	require 'layouts/footer.php';
?>