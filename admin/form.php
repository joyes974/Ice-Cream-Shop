	<?php
	include('includes/config.php');
	$p = new product();
	if($_REQUEST['id']!=null)
	$p->getProduct($_REQUEST['id']);
	?>

	<div style="width:350px;margin:0 auto;">
	<form action="update.php" method="post">
	  <div class="form-group">
		<label for="ID">ID</label>
		<input type="text" name="id" class="form-control" id="ID" placeholder="ID" value="<?=$p->data[0]['id']?>" disabled>
		<input type="hidden" name="sl" value="<?=$p->data[0]['id']?>">
	  </div>
	  <div class="form-group">
		<label for="Name">Name</label>
		<input type="text" name="name" class="form-control" id="Name" placeholder="Name" value="<?=$p->data[0]['name']?>">
	  </div>
	  <div class="form-group">
		<label for="Type">Type</label>
		<input type="text" name="type" class="form-control" id="Type" placeholder="Type" value="<?=$p->data[0]['type']?>">
	  </div>
	  
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
	<?php
	include('includes/footer.php');
	?>