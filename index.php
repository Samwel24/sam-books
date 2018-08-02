<?php

require 'layouts/header.php';
$main = new Main;
// $main->test();
?>
<br><br><br>
<div class="col-md-8 offset-md-2">

  <p class="">Welcome to <b>Sam-books - Please select any book of your choice to download.</b></p>
  
  <br><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <th >PDF</th>
      <td>Code Complete</td>
      <td>Steve McConnell</td>
      <td><a target="blank" href="donate?id=Code Complete" class="btn btn-primary btn-sm"> Download </a></td>
    </tr>
    <tr>
      <th scope="row">PDF</th>
      <td>Clean Code</td>
      <td>Rober Cecil</td>
      <td><a target="blank" href="donate?id=Clean Code" class="btn btn-primary btn-sm"> Download </a></td>
    </tr>
    <tr >
      <th scope="row">PDF</th>
      <td>The Art of Computer Programming</td>
      <td>Donald Knuth</td>
      <td><a target="blank" href="donate?id=The Art of Computer Programming" class="btn btn-primary btn-sm"> Download </a></td>
    </tr>
    <tr >
      <th scope="row">PDF</th>
      <td>Cracking the Coding Interview</td>
      <td>Gayle Laakmann McDowell</td>
      <td><a target="blank" href="donate?id=Cracking the Coding Interview" class="btn btn-primary btn-sm"> Download </a></td>
    </tr>
  </tbody>
</table> 
<br><br>
</div>

<?php

	require 'layouts/footer.php';
?>