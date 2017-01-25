<!DOCTYPE html>
<html>
  <head>
    <title>Second Page</title>
  </head>
  <body>
  	<pre>
  		<?php 
  		//print_r($_GET) 
  		?>
  	</pre>
  	<?php 
  		$id = $_GET['id'];
  		echo $id;
  		$company = $_GET['company'];
  		echo $company;
  	 ?>
  </body>
</html>
