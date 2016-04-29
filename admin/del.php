	<?php
	include('includes/config.php');
	$p = new product();
	$p->remove($_REQUEST['id']);
	header('Location: product.php');
	?>