	<?php
	include('includes/config.php');
	$p = new product();
	$p->findAll();
	?>
    <h1>Purchase List</h1>
	<div style="width:350px;margin:0 auto;">
	<form action="add_purchase.php" method="post">

	  <div class="form-group">
		<label for="Name">Main Item</label>
		<select class="form-control" name="main">
		
		<?php
	 for($i=0; $i<count($p->data); $i++)
		{
			//$name="";
			if($p->data[$i]['type'] == 'Main Item'){
				echo "<option>".$p->data[$i]['name']."</option>";
			}
		}
			 ?>
	 
	</select>
	  </div>
	  
	  <div class="form-group">
		<label for="Flavor">Flavor</label>
		<select class="form-control" name="flavor">
		
		<?php
	 for($i=0; $i<count($p->data); $i++)
		{
			//$name="";
			if($p->data[$i]['type'] == 'Flavor'){
				echo "<option>".$p->data[$i]['name']."</option>";
			}
		}
			 ?>
	 
	</select>
	  </div>
	  
	  <div class="form-group">
		<label for="Serving vessels">Serving vessels</label>
		<select class="form-control" name="vessels">
		
		<?php
	 for($i=0; $i<count($p->data); $i++)
		{
			//$name="";
			if($p->data[$i]['type'] == 'Serving vessels'){
				echo "<option>".$p->data[$i]['name']."</option>";
			}
		}
			 ?>
	 
	</select>
	  </div>
	  
	 <div class="form-group">
		<label for="Soda">Soda</label>
		<select class="form-control" name="soda">
		
		<?php
	 for($i=0; $i<count($p->data); $i++)
		{
			//$name="";
			if($p->data[$i]['type'] == 'Soda'){
				echo "<option>".$p->data[$i]['name']."</option>";
			}
		}
			 ?>
	 
	</select>
	  </div>
	  
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
	<?php
	include('includes/footer.php');
	?>