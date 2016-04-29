	<?php
	include('includes/config.php');
	$p = new product();
	$v=array();
	$v['id']=$_REQUEST['sl'];
	$v['name']=$_REQUEST['name'];
	$v['type']=$_REQUEST['type'];
	$p->modify_Product($v);
	 header('Location: product.php');
	 ?>