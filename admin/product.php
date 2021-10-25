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
    				<a href="product.php" style="color: blue;">Product</a>
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
      
      <div>
        <?php
        error_reporting(1);
        require '../boostrap.php';
          $sql = mysql_query("SELECT * FROM items");

          echo"<form method='post'><table align='center' width='1024px'><tr>";

            $n=0;
            while($arr=mysql_fetch_array($sql))
            {
              $i=$arr['img'];
                 
              if($n%4==0)
              {
                echo "<tr>";
              }
                 echo "
                 <td height='280' width='240' align='center'><img src='items/$i' width='200'><br/>
               
                 <b>PRODUCT :</b>"."  ".$arr['name'].
                 "<br><b>PRICE :</b>"."   ".$arr['price'].
                 "<br><a href='deleteItems.php?img=$i' style='text-decoration: none; margin-top: 10px;' class='btn btn-sm btn-danger'><b>Delete</b></a>
                 </td>";
                 
                  $n++;
            }

            echo "</tr></table></form>";
          
        ?>  
      </div><!--ProductRow-->

    </div><!--container-->

    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>