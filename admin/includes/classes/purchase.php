<?php
class purchase extends root /*extended the common class root*/
{
	function purchase($id="") /*Constructor method of purchase class*/
	{
		$this->name = "purchase"; /*Database table name will be set when an object of purchase class is created*/
		if($id) $this->id=$id;
	}	
	
	
}

?>
