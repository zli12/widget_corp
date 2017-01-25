<!DOCTYPE html>
<html>
  <head>
    <title>Validations errors</title>
  </head>
  <body>
  <?php 
  require_once('validation_functions.php');

  $errors =  array();

  $username = trim("user");

  if (!has_presence($username)) {
    $errors['username'] = "user name is empty";
  }

  print_r($errors);
    ?>
  </body>
  </html>
