  <?php 
  require_once("included_function.php");
  if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "abc" && $password == "123") {
      // success
      redirect_to("phpinfo.php");
    }
    else {

    $username = $_POST["username"];
    $message = "There were some errors.";
    }

  }
  else {
    $message = "Please log in.";
    $username = "";
    $password = "";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
  <?php 
  echo $message ?><br>
  <form action="form_single.php" method="post">
  	Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username) ?>"><br>
  	Password: <input type="password" name="password" value=""><br>
  	<br>
  	<input type="submit" name="submit" value="Submit">
  </form>
  </body>
  </html>
