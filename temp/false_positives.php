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
    $value = "x";
    if (!isset($value) || empty($value)) {
      echo "validation failed<br/>";
    }
    // string length
    $value = "";
    $min = 3;
    $max = 6;
    if (strlen($value)< $min) {
      echo "validation failed<br/> Too Short<br>";
    }
    if (strlen($value)> $max) {
      echo "validation failed<br/> Too long<br>";
    }
    // type
    $value = "1";
    if (!is_string($value)) {
      echo "validation failed<br/>Not a string<br>";
    }
    // inclusion in a set
    $value = "1";
    $set = ["1","2","3"];
    if (!in_array($value,$set)) {
      echo "validation failed<br/>Not in a set<br>";
    }
    // uniqueness
    if (!preg_match("/PHP/", "PHP is fun")) {
      echo "validation failed<br/>Not matching";
    }
    // format
    $value = "nobodynowhere.com";
    if (!preg_match("/@/", $value)) {
      echo "validation failed<br/>Not an email address";
    }
    if (strpos($value, "@") == false) {
     echo "validation failed<br/>Not an email address";
    }
   ?>
  </body>
  </html>
