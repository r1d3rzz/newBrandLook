<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/indexViewStyle.css">
    <title>admin Dashboard</title>
  </head>
  <body>
    
    <div class="container-fluid">
    	<div class="row headerRow">
    		<div class="col-md-2 navName">
    			<a href="../index.php">BrandLook</a>
    		</div>
    		<div class="col-md navPage">
    			<nav>
    				<a href="index.view.php">Home</a>
            <a href="customer.php">Customer</a>
    				<a href="insert.php">Insert</a>
    				<a href="product.php">Product</a>
    				<a href="order.php" style="color: blue;">Order</a>
    				<a href="message.php">Message</a>
    			</nav>
    		</div>
    		<div class="col-md-2 navLogout">
    			<nav>
    				<a href="index.php" class="btn btn-danger">Logout</a>
    			</nav>
    		</div>
    	</div><!--headerRow-->

      <div class="row messageRow">
        <div class="col-md">
          <table class="table table-striped text-center">
            <tr class="table-primary">
              <th>Order ID</th>
              <th>Product</th>
              <th>Price</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>City</th>
              <th>Address</th>
              <th>Delete</th>
            </tr>
            <?php
            error_reporting(1);
            require '../boostrap.php';
              $sql = mysql_query("SELECT * FROM orders");
              while (list($orderId, $product, $price, $name, $mobile, $city, $address) = mysql_fetch_array($sql)) {
              ?>

              <tr>
                <td><?php echo $orderId ;?></td>
                <td><?php echo $product ;?></td>
                <td><?php echo $price ;?></td>
                <td><?php echo $name ;?></td>
                <td><?php echo $mobile ;?></td>
                <td><?php echo $city ;?></td>
                <td><?php echo $address ;?></td>
                <td><a href="deleteOrder.php?order_id=<?php echo $orderId;?>" class="btn btn-sm btn-danger">Delete</a></td>
              </tr>

              <?php }
            ?>
          </table>
        </div>
      </div><!--tableRow-->
    </div><!--container-->

    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>