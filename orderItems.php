<?php 
error_reporting(1);
session_start();
require 'boostrap.php';
		
		$imgName = $_GET['img'];
		$_SESSION['imgName'] = $imgName ;
		

	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);

		$sql = mysql_query("SELECT * FROM register WHERE email='$email' AND password='$pass'");
		$val = mysql_fetch_array($sql);
		if($val)
		{
			header('location:order.view.php');
		}
		else
		{
			echo "<script>alert('Invalid Password or Email')</script>";
			echo "<script>location='orderItems.php?img=$imgName'</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BrandLook</title>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" type="text/css" href="admin/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md">
				<div class="wrapper fadeInDown">
				  <div id="formContent">
				    <!-- Tabs Titles -->

				    <!-- Icon -->
				    <!-- <div class="fadeIn first">
				      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
				    </div> -->

				    <!-- Login Form -->
				    <form method="post">
				      <h2>Welcome Customer</h2>
				      <input type="email" id="login" class="fadeIn second" name="email" autofocus required="" placeholder="Email">
				      <input type="password" id="password" class="fadeIn third" name="pass" required="" placeholder="password">
				      <input type="submit" class="fadeIn fourth" value="Confirm" name="login">
				    </form>

				    <!-- Remind Passowrd -->
				    <div id="formFooter">
				      <a class="underlineHover" href="register.php">If You have No Account.Register Here</a>
				    </div>

				  </div>
				</div>
			</div>
		</div><!--login-->
	</div>
</body>
</html>
