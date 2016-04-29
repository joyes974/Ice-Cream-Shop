	<?php
	include('includes/config.php');

	?>

	<div style="width:350px;margin:0 auto;">
	<form action="add.php" method="post">

	  <div class="form-group">
		<label for="Name">Name</label>
		<input type="text" name="name" class="form-control" id="Name" placeholder="Name" value="">
	  </div>
	  <div class="form-group">
		<label for="Type">Type</label>
		<input type="text" name="type" class="form-control" id="Type" placeholder="Type" value="">
	  </div>
	  
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
	<?php
	include('includes/footer.php');
	?>