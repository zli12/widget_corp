  <?php 
  if (isset($_POST["submit"])) {
  	
  $username = $_POST["username"];
  $password = $_POST["password"];
  $message = "Logging in: {$username}";
  }
  else {
  	$message = "Please log in.";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form Porcessing</title>
  </head>
  <body>
 
  <pre>
  <?php print_r($_POST) ?>	
  </pre>
  <br>

  
  </body>
  </html>
