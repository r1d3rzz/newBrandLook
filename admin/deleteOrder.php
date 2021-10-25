<?php 
error_reporting(1);
require '../boostrap.php';

	$sql = mysql_query("DELETE FROM orders WHERE order_id = '{$_GET['order_id']}'");
	header('location:order.php');
?>