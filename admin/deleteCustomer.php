<?php 
error_reporting(1);
require '../boostrap.php';
	$sql = mysql_query("DELETE FROM register WHERE id = '{$_GET['id']}'");
	header('location:customer.php');
?>