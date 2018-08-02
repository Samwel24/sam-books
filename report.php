<?php

require 'layouts/header.php';
$main = new Main;

if (isset($_GET['txref']))

$main->returnedUrl($_GET['txref']);
?>
<br><br><br>
<div class="col-md-8 offset-md-2">

<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  Successful!
</div>
      
     Thank you!, your payment has been received, an email has been sent you containing your payment details  click the link below to download your file.
  <br><br>
 <a href="http://results.net.ng/flutterwave-project/sam-books/files/Samuel-Ezedi v5.0.pdf" download="Samuel-Ezedi.pdf" class="btn btn-primary btn-sm">Download file</a></p><br><br>
  
   <!--<a href="secure?id=<?php //echo $_GET['id']; ?>&pay=1" class="btn btn-sm btn-success pull-right">Pay</a>-->
   <a href="destroy" class="btn btn-sm btn-primary pull-left">Go back home page</a>
<br><br>
</div>

<?php

	require 'layouts/footer.php';
?>