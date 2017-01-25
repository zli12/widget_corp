  <?php 
  function redirect_to($new_location){
  
header("Location: basic.php"); 
exit;
}
$logged_in =  $_GET['logged_in'];
if ($logged_in=="1") {
	redirect_to($new);
	# code...
}
else {
	redirect_to("lynda.com");
}
$new = "basic.php";
redirect_to($new);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Redirect</title>
  </head>
  <body>
  <?php  ?>
  </body>
  </html>
