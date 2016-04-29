	<?php
	include('includes/config.php');
	$p = new product();
	$p->findAll();
	?>
     <h1>Product Configuration List</h1>

	<table class="table table-striped">
	  <thead>
	  <tr>
		 <th>ID</th>
		 <th>NAME</th>
		 <th>TYPE</th>
		 <th>operation</th>
	  </tr>
	  </thead>
	 <tbody>
	 <?php
	 for($i=0; $i<count($p->data); $i++)
		{
			?>
	 <tr>
		 <td><?=$i+1?></td>
		 <td><?=$p->data[$i]['name']?></td>
		 <td><?=$p->data[$i]['type']?></td>
		 <td><a href="form.php?id=<?=$p->data[$i]['id']?>">Edit</a> | <a href="del.php?id=<?=$p->data[$i]['id']?>">Delete</a></td>
	  </tr>
		<?php } ?>
	 </tbody>
	  <tfoot>
	  <tr>
		 <td><a href="add_form.php">Add New</a></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 
	  </tr>
	 </tfoot>
	</table>







	<?php
	include('includes/footer.php');
	?>