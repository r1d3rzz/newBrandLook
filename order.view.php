<?php
error_reporting(1);
require 'boostrap.php';
session_start();
	$imgName = $_SESSION['imgName'];
	
	$sql = mysql_query("SELECT * FROM items WHERE img = '$imgName'");
	$val = mysql_fetch_array($sql);
	
	if($_POST['order'])
	{
		$orderId = $_POST['orderId'];
		$product = $_POST['product'];
		$price   = $_POST['price'];
		$name  	 = $_POST['name'];
		$mobile  = $_POST['mobile'];
		$city	 = $_POST['city'];
		$address = $_POST['address'];

		$_SESSION['orderId'] = $orderId ;

		$query = mysql_query("INSERT INTO orders VALUES ('$orderId','$product','$price','$name','$mobile','$city','$address')");

		header('location:orderDisplay.php');
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/orderView.css">

    <title>Order Register</title>
  </head>
  <body>
    
    <div class="container-fluid">
    	<div class="row headerOrder">
    		<div class="col-md-8">
    			<h3>Order Register</h3>
    		</div>
    		<div class="col-4 cancleBtn">
    			<a href="index.php" class="btn btn-danger">Cancle</a>
    		</div>
    	</div><!--headerRow-->

    	<div class="row">
    		<form method="post">
	    		<table class="orderTable">
	    			<tr>
	    				<td class="tableName">Order ID</td>
	    				<td><input type="text" name="orderId" value="<?php echo "Order ID ".rand(10,999)?>" readonly class="form-control"></td>
	    			</tr>
	    			<tr>
	    				<td class="tableName">Product</td>
	    				<td><input type="text" name="product" value="<?php echo $val['name']; ?>" readonly class="form-control"></td>
	    			</tr>
	    			<tr>
	    				<td class="tableName">Price</td>
	    				<td><input type="text" name="price" value="<?php echo $val['price']; ?>" readonly class="form-control"></td>
	    			</tr>
	    			<tr>
	    				<td class="tableName">Name</td>
	    				<td><input type="text" name="name" class="form-control" placeholder="Enter Name ..." required></td>
	    			</tr>
	    			<tr>
	    				<td class="tableName">Mobile</td>
	    				<td><input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number ..." required></td>
	    			</tr>
	    			<tr>
	    				<td class="tableName">City</td>
	    				<td><input type="text" name="city" class="form-control" placeholder="Enter City Name ..." required></td>
	    			</tr>
	    			<tr>
	    				<td class="tableName">Address</td>
	    				<td>
	    					<textarea class="form-control" name="address" placeholder="Enter Address ..." required></textarea>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td colspan="2" align="right"><input type="submit" name="order" value="Order" class="btn btn-primary orderBtn" style="margin: 10px;"></td>
	    			</tr>
	    		</table>
    		</form>
    	</div><!--Register Row-->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>