<?php
error_reporting(1);
require '../boostrap.php';
  if(isset($_POST['upload']))
  {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    
    mkdir("items/");
    move_uploaded_file($tmp, "items/".$img);

    $sql = mysql_query("INSERT INTO items VALUES ('','$name','$img','$price')");

    echo "<script>alert('Upload item Success')</script>";
    echo "<script>location='insert.php'</script>";
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    				<a href="insert.php" style="color: blue;">Insert</a>
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
        <div class="col">
          <form method="post" enctype="multipart/form-data">
            <div class="insertBox">
              <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" name="name" class="form-control" id="productName" placeholder="Enter Product Name">
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
              </div>
               <div class="custom-file">
                <input type="file" name="img" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose Product Image...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
              <input type="submit" class="btn btn-primary" name="upload" value="Upload">
            </div><inputForm-->
          </form>
      </div><!--InsertRow-->
    </div><!--container-->

    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>