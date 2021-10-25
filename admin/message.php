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
    				<a href="order.php">Order</a>
    				<a href="message.php" style="color: blue;">Message</a>
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
              <th>Mail No.</th>
              <th>Email</th>
              <th>Name</th>
              <th>Message</th>
              <th>Delete</th>
            </tr>
            <?php
            error_reporting(1);
            require '../boostrap.php';
              $sql = mysql_query("SELECT * FROM contact");
              while (list($id, $email, $name, $message) = mysql_fetch_array($sql)) {
              ?>

              <tr>
                <td><?php echo $id ;?></td>
                <td><?php echo $email ;?></td>
                <td><?php echo $name ;?></td>
                <td><?php echo $message ;?></td>
                <td><a href="deleteMessage.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger">Delete</a></td>
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