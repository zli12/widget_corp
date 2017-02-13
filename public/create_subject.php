<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php 
  if (isset($_POST["submit"])) {
	  $visible =(int) $_POST["visible"];
	  $position = (int) $_POST["position"];
	  $menu_name = mysql_prep($_POST["menu_name"]);
	  
	  // validations
	  $required_fields = array("menu_name", "position", " visible");
	  validate_presences($required_fields);

	  $fields_max_lengths = array("menu_name" => 30);
	  validate_max_lengths($fields_max_lengths);

	  if (!empty($errors)) {
	  	$_SESSION["errors"] = $errors;
	  	redirect_to("new_subject.php");
	  }

	  $query = "INSERT INTO subjects (";
	  $query .= " menu_name, position, visible";
	  $query .= " ) values (";
	  $query .= " '{$menu_name}', {$position}, {$visible}";
	  $query .= ")";

	  $result = mysqli_query($connection, $query);
	  
	  if ($result) {
	  	$_SESSION["message"] = "Subject created.";
	    redirect_to("manage_content.php");
	  } else {
	  	$_SESSION["message"] = "Subject creation failed.";
	   	redirect_to("new_subject.php");
	  }

  } else {
  	redirect_to("new_subject.php");
  }

 ?>

<?php 
if (isset($connection)) { mysqli_close($connection); }
?>