<?php 
// set cookie before html rendering
  $name = "test";
  $value = "hello123";
  $expire = time() + (60*60*24*7); // add seconds
  //setcookie($name, $value, $expire);
  setcookie($name,null);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cookies</title>
  </head>
  <body>
      <?php         
        $test = isset($_COOKIE["test"])? $_COOKIE["test"]:"";
        echo $test;
        ?>
  </body>
</html>
