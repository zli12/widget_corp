<?php
  // 1. DB connection
  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "secretpassword";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if (mysqli_connect_errno()) {
    # code...
    die("Database connection failed:".
      mysqli_connect_error() .
      " ( " . mysqli_connect_errno(). ")");
  };
?>
<?php 
  //
  $menu_name = "Today's Widget Trivia";
  $position = (int) 4;
  $visible = (int) 1;
  // For strings
  $menu_name = mysqli_real_escape_string($connection, $menu_name);
  // 2. Perform DB query
  $query = "INSERT INTO subjects(";
  $query .= " menu_name, position, visible";
  $query .= " ) values (";
  $query .= " '{$menu_name}', {$position}, {$visible}";
  $query .= ")";

  $result = mysqli_query($connection, $query);
  // query error
  if ($result) {
    // sucess, redirect_to
    echo "Sucess!";
  } else {
    // $message = "failed"
    die("Database query failed. " . mysqli_error($connection));
  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Database connections</title>
  </head>
  <body>
  
  </body>
</html>
  <?php 
    mysqli_close($connection);
   ?>