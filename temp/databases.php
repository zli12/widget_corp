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
  // 2. Perform DB query
  $query = "SELECT * ";
  $query .= "FROM subjects ";
  $query .= "WHERE visible = 1 ";
  $query .= "ORDER BY position ASC";

  $result = mysqli_query($connection, $query);
  // query error
  if (!$result) {
    # code...
    die("Database query failed:");
  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Database connections</title>
  </head>
  <body>
  <ul>
  <?php 
  // 3. User returned data
  while ($subject = mysqli_fetch_assoc($result)) {
    ?>
    <li> <?php echo $subject["menu_name"] . " (" . 
    $subject["id"] . ")"; ?></li>
    <?php 
  }

   ?>
   </ul>
   <?php 
   mysqli_free_result($result); ?>
  </body>
</html>
  <?php 
    mysqli_close($connection);
   ?>