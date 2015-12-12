<!doctype html>
<html lang="en">
<head>
	<?php
		include("/header.php");
	?>
</head>
<body>
  <?php
    if (empty($_SESSION['id']) and empty($_SESSION['username'])) {
      include('authreg.php');
    } else {
      
    }
  ?>
</body>
</html>
