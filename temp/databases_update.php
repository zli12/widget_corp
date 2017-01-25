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
  $menu_name = "Delete me";
  $position = 4;
  $visible = 1;
  $id = 5;
  // 2. Perform DB query
  $query = "UPDATE subjects SET ";
  $query .= " menu_name = '{$menu_name}', ";
  $query .= " position = {$position}, ";
  $query .= " visible = {$visible} ";
  $query .= "WHERE id = {$id}";

  $result = mysqli_query($connection, $query);
  // query error
  if ($result && mysqli_affected_rows($connection) == 1) {
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