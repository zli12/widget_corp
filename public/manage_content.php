<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php find_selected_page(); ?>

<?php include("../includes/layout/header.php"); ?>

	  <div id="main">
	    <div id="navigation">
	      <?php echo navigation($current_subject, $current_page) ?>
	      <br>
	      <a href="new_subject.php">+ Add a subject</a>
      </div>
      <div id="page">
    		<?php echo message(); ?>
        <?php if ($current_subject) { ?>
        <h2>Manage Content</h2>
        Menu name: <?php echo $current_subject["menu_name"]; ?>
        <a href="edit_subject.php?subject=<?php echo $current_subject["id"]; ?>">
        Edit Subject</a>

        <?php } elseif ($current_page) { ?>
       	<h2>Manage Page</h2>
        Menu name: <?php echo $current_page["menu_name"]; ?>

        <?php } else {?>
        	Please select a subject or a page.

        <?php } ?>
        
      </div>
    </div>
  </body>
</html>
  
<?php include("../includes/layout/footer.php"); ?>