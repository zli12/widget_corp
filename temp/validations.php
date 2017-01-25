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
    <title>Validations</title>
  </head>
  <body>
  <?php 
    // presence
    $value = "   ";
    if (!isset($value) || empty($value) && !is_numeric($value)) {
      echo "validation failed<br/>";
    }
 
   ?>
  </body>
  </html>
