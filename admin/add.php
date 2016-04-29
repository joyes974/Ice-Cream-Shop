	<?php
	include('includes/config.php');
	$p = new product();
	$p->new_Product();
	header('Location: product.php');
	?>