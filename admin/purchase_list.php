	<?php
	include('includes/config.php');
	$p = new purchase();
	$p->findAll();
	?>


	<table class="table table-striped">
	  <thead>
	  <tr>
		 <th>ID</th>     
		 <th>TYPE</th>
		 <th>DISCOUNT</th>
		 <th>FLAVORS</th>
		 <th>VESSELS</th>
		 <th>SODA</th>
	  </tr>
	  </thead>
	 <tbody>
	 <?php
	 for($i=0; $i<count($p->data); $i++)
		{
			?>
	 <tr>
		 <td><?=$p->data[$i]['id']?></td>
		 <td><?=$p->data[$i]['type']?></td>
		 <td><?=$p->data[$i]['discount']?></td>
		 <td><?=$p->data[$i]['vessels']?></td>
		 <td><?=$p->data[$i]['flavors']?></td>
		 <td><?=$p->data[$i]['soda']?></td>
		  </tr>
		<?php } ?>
	 </tbody>
	  <tfoot>
	  <tr>
		 <td><a href="purchase_form.php">Add New</a></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		
		 
	  </tr>
	 </tfoot>
	</table>







	<?php
	include('includes/footer.php');
	?>