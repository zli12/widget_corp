<?php         
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sessions</title>
  </head>
  <body>
  <?php 
    $_SESSION["first_name"] = "Kevin";
    $name = $_SESSION["first_name"];
    echo $name;
   ?>
  </body>
</html>
