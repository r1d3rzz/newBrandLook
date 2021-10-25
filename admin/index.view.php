<?php
error_reporting(1);
require '../boostrap.php';
  $customer = mysql_query("SELECT * FROM register");
  $product = mysql_query("SELECT * FROM items");
  $order = mysql_query("SELECT * FROM orders");
  $message = mysql_query("SELECT * FROM contact");

  $customerVal = mysql_num_rows($customer);
  $productVal = mysql_num_rows($product);
  $orderVal = mysql_num_rows($order);
  $messageVal = mysql_num_rows($message);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">

        <!-- <link rel="stylesheet" href="../css/fontAwesome.css"> -->
        <!-- <link rel="stylesheet" href="../css/hero-slider.css"> -->
        <link rel="stylesheet" href="../css/tooplate-style.css">


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


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
    				<a href="index.view.php" style="color: blue;">Home</a>
            <a href="customer.php">Customer</a>
    				<a href="insert.php">Insert</a>
    				<a href="product.php">Product</a>
    				<a href="order.php">Order</a>
    				<a href="message.php">Message</a>
    			</nav>
    		</div>
    		<div class="col-md-2 navLogout">
    			<nav>
    				<a href="index.php" class="btn btn-danger">Logout</a>
    			</nav>
    		</div>
    	</div><!--headerRow-->

      <div class="row">
        <div class="col-md=12 text-center">
          <h3 style="padding: 30px;">Welcome Admin</h3>
        </div>
      </div>

      <div id="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fact-item">
                        <div class="counter" data-count="<?php echo $customerVal;?>">0</div>
                        <span class="notiTxt">Customers</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fact-item">
                        <div class="counter" data-count="<?php echo $productVal;?>">0</div>
                        <span>Products</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fact-item">
                        <div class="counter" data-count="<?php echo $orderVal;?>">0</div>
                        <span>Orders</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fact-item">
                        <div class="counter" data-count="<?php echo $messageVal;?>">0</div>
                        <span>Messages</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--container-->

    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../js/vendor/bootstrap.min.js"></script>

    <script src="../js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>