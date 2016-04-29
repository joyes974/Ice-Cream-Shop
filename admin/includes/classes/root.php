<?php
class root
{
	var $name = ''; /* $name is a global variable. This variable is used to set database name*/
    var $id = 0; /* $id is a global variable. This variable is used to set the value of database table id*/
    var $data = array(); /* $data is a global array variable.*/
    
    function root(){} /*Constructor method of root class*/
    
    function findAll($conditions="", $fields="",  $order="", $limit="") /*findAll() is a global method. As root class is extended to all other classes so this method can be used from any other classes/objects*/
    {
        $conditions_sql = ($conditions=="")?"":"where $conditions";
		$fields_sql = ($fields=="")?"*":$fields;
		$order_sql = ($order=="")?"":"order by $order";
        $limit_sql = ($limit=="")?"":"limit $limit";
		$sql = "select $fields_sql from `".$this->name."` $conditions_sql $order_sql $limit_sql";
		//echo "$sql";
		$rs = mysql_query($sql);
        while($row=mysql_fetch_array($rs))
		{
			$this->data[] = $row; /*set fetched data into global variable $data*/
		}
		//print_r($this->data);
        return $this->data;
    }
	
	function update_product($value=array()){
		$sql = "update product_type set name = '".$value['name']."', type = '".$value['type']."' where id = ".$value['id'];
		//echo $sql;
		$rs = mysql_query($sql);
		if($rs){
			return true;
		}
		else {
			return false;
		}
	}
	function remove($id){
		$sql = "delete from product_type where id = $id";
		//echo $sql;
		$rs = mysql_query($sql);
		if($rs){
			return true;
		}
		else {
			return false;
		}
	}
	
	function add(){
		$sql = "insert into product_type (name, type) values ('".$_REQUEST['name']."','". $_REQUEST['type']."')";
		//echo $sql;
		$rs = mysql_query($sql);
		if($rs){
			return true;
		}
		else {
			return false;
		}
	}
	
	function new_Purchase(){
		if($_REQUEST['main'] == 'milkshake' || $_REQUEST['main'] == 'float'){
			$disc = 'yes';
		}
		else{
			$disc = 'No';
		}
		$sql = "insert into purchase (type,discount,vessels,flavors,soda) values ('".$_REQUEST['main']."','". $disc."','".$_REQUEST['vessels']."','".$_REQUEST['flavor']."','".$_REQUEST['soda']."')";
		echo $sql;
		$rs = mysql_query($sql);
		if($rs){
			return true;
		}
		else {
			return false;
		}
	}
}
?>
