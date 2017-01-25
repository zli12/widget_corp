<!DOCTYPE html>
<html>
  <head>
    <title>First Page</title>
  </head>
  <body>
  	<?php $link_name = "Second Page";
  	$id=5;
  	$company = "Johnson & Johnson"; ?>
    <a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo rawurlencode($company) ?>"><?php echo $link_name; ?></a>

  </body>
</html>
