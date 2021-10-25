<?php
error_reporting(1);
require 'boostrap.php';
  if(isset($_POST['register']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['pass']);
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $query = mysql_query("SELECT * FROM register WHERE email = '$email'");
    $val = mysql_fetch_array($query);

    if($val)
    {
    	echo "<script>alert('Your Email Address is Already Exits')</script>";
    	echo "<script>location='register.php'</script>";
    }
    else
    {
    	$sql = mysql_query("INSERT INTO register VALUES ('','$name','$email','$password','$gender','$phone')");
    	echo "<script>alert('Your Account is Created Successfully')</script>";
    	echo "<script>location='order.php'</script>";
    }
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

    <link rel="stylesheet" type="text/css" href="admin/css/indexViewStyle.css">

    <title>Register</title>
  </head>
  <body>
    
    <div class="container-fluid">
    	<div class="row headerRow">
    		<div class="col-md-2 navName">
    			<a href="#">BrandLook</a>
    		</div>
    		<div class="col-md navPage">
    			<h2>Customer Register</h2>
    		</div>
    		<div class="col-md-2 navLogout">
    			<nav>
    				<a href="index.php" class="btn btn-primary">Home</a>
    			</nav>
    		</div>
    	</div><!--headerRow-->

      <div class="row">
        <div class="col">
          <form method="post" enctype="multipart/form-data">
            <div class="insertBox">
              <div class="form-group">
                <label for="productName">Name</label>
                <input type="text" name="name" class="form-control" id="productName" placeholder="Enter Your Name" autofocus required>
              </div>
              <div class="form-group">
                <label for="productName">Email</label>
                <input type="email" name="email" class="form-control" id="productName" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label for="productName">Password</label>
                <input type="password" name="pass" class="form-control" id="productName" placeholder="Set Your Password" required>
              </div>
              <div class="form-group">
                <label for="productName">Gender</label><br>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
				  <input type="radio" class="btn-check" name="gender" id="btnradio1" autocomplete="off" checked value="Male">
				  <label class="btn btn-outline-primary" for="btnradio1">Male</label>

				  <input type="radio" class="btn-check" name="gender" id="btnradio2" autocomplete="off" value="Female">
				  <label class="btn btn-outline-primary" for="btnradio2">Female</label>

				  <input type="radio" class="btn-check" name="gender" id="btnradio3" autocomplete="off" value="Other">
  				  <label class="btn btn-outline-primary" for="btnradio3">Other</label>
				</div>
              </div>
              <div class="form-group">
                <label for="productName">Phone</label>
                <input type="text" name="phone" class="form-control" id="productName" placeholder="Enter Your Phone Number" required>
              </div>
              <input type="submit" class="btn btn-primary" name="register" value="Register">
            </div><inputForm-->
          </form>
      </div><!--InsertRow-->
    </div><!--container-->

    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>