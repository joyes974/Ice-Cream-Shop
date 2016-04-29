<?php
class product extends root /*extended the common class root*/
{
	function product($id="") /*Constructor method of product class*/
	{
		$this->name = "product_type"; /*Database table name will be set when an object of product class is created*/
		if($id) $this->id=$id;
	}	
	
	function getProduct($p_id) /*getProduct() is an private method for product class. Only product object can use this method*/
	{
		$this->findAll("id=".$p_id);
		return $this->data;
	}
	
	function modify_Product($v=array()) 
	{
		$this->update_product($v);
		return;
	}
	
	function del_Product($p_id) 
	{
		$this->remove($p_id);
		return;
	}
	
	function new_Product() 
	{
		$this->add();
		return;
	}
}

?>
