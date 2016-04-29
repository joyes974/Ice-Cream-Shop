	<?php
	include('includes/config.php');
	$p = new purchase();
	$p->new_Purchase();
	header('Location: purchase_list.php');
	?>