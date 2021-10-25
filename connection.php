<?php 
error_reporting(1);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "brandlook";

$con = mysql_connect($host,$username,$password) or die(mysql_error());
mysql_select_db($dbname,$con);
?>