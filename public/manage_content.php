<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php 
  // 2. Perform DB query
  $query = "SELECT * ";
  $query .= "FROM subjects ";
  $query .= "WHERE visible = 1 ";
  $query .= "ORDER BY position ASC";

  $result = mysqli_query($connection, $query);
  // query error
  confirm_query($result);

 ?>

<?php include("../includes/layout/header.php"); ?>
    <div id="main">
      <div id="navigation">
        <ul class="subjects">
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
      </div>
      <div id="page">
        <h2>Manage Content</h2>
      </div>
    </div>


    <?php 
   mysqli_free_result($result); ?>
  </body>
</html>
  
<?php include("../includes/layout/footer.php"); ?>