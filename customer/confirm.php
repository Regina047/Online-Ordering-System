<?php
session_start();
$active='Account';
if(!isset($_SESSION['cust_username'])){

	echo"<script>window.open('../checkout.php','_self')</script>";
}else{

include_once("includes/db_conn.php");
include("functions/functions.php");

if(isset($_GET['order_id'])){
		$order_id = $_GET['order_id'];
}
 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iconicplate store || PHP</title>
  <link rel="stylesheet"  href="css/bootstrap-337.min.css">
  <link rel="stylesheet"  href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div id="top"> <!---Top begin --->
    <div class="container"> <!---container begin --->
         <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">
                   
                   <?php 
              
                   
                   if(!isset($_SESSION['cust_username'])){

                     echo "Welcome: Guest";
                       
                   }else{
                                           
                       
                       echo "Welcome: " . $_SESSION['cust_username'] . "";


                       
                   }
                   
                   ?>
                   
               </a>
               <a href="../checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
               
           </div><!-- col-md-6 offer Finish -->
          <div class="col-md-6">  <!---col-min-6 begin --->
            <ul class="menu"> <!---cmenu begin--->
              <li>
                <a href="../customer_register.php">Register</a>
              </li>
              <li>
                <a href="customer/my_account.php">My Account</a>
              </li>
              <li>
                <a href="../cart.php">Go to Cart</a>
              </li>
              <li>
                <a href="../checkout.php">
                  <?php 

                   if(!isset($_SESSION['cust_username'])){
                        echo "<a href='../checkout.php'>Login</a>" ;
                      }else{
                        echo "<a href='../logout.php'>Logout</a>";
                      }

                  ?>
                </a>
              </li>
            </ul> <!---cmenu finish --->
          </div>  <!---col-min-6 finish --->
    </div> <!---container finish --->
  </div> <!---Top finish --->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="" alt="iconicplate Logo" class="hidden-xs">
                   <img src="images/ecom-store-logo-mobile.png" alt="iconicplate Logo" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="<?php if($active=='Home')  echo"active";?>">
                           <a href="../index.php">Home</a>
                       </li>
                      <li class="<?php if($active=='Shop')  echo"active";?>">
                           <a href="../shop.php">Menu</a>
                       </li>
                       <li class="<?php if($active=='Account')  echo"active";?>">
                        
                           <?php

                           if(!isset($_SESSION['cust_username'])){

                            echo "<a href='checkout.php'>My Account</a>";

                           }else{

                             echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

                           }


                            ?>
                       </li>
                       <li class="<?php if($active=='Cart')  echo"active";?>">
                           <a href="../cart.php">Shopping Cart</a>
                       </li>
                       <li class="<?php if($active=='Contact')  echo"active";?>">
                           <a href="../contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php echo items(); ?> Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->

	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="../index.php">Home</a>
					</li>
					<li>
						My Account
					</li>
				</ul>
			</div>

			<div class="col-md-3">
				
				<?php include ("sidebar.php"); ?>

			</div>

			<div class="col-md-9">
				<div class="box">
					<h1 align-center>Please Confirm Your Payment</h1>
					<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Amount to pay: </label>
							<input type="text" class="form-control" name="amount_sent" required>
						</div>
						<div class="form-group">
							<label>Select Payment Mode: </label>
							<select class="form-control" name="payment_mode">
							
								<option>COD- Cash On Delivery</option>
							
							</select>
						</div>

						<div class="form-group">
						<label>Payment Date: </label>
						<input type="text" class="form-control" name="date" required>
						</div>

						<div class="text-center" >
							<button class="btn btn-primary btn-lg" name="confirm_payment">
								<i class="fa fa-user-md"></i> Confirm Payment
							</button>
						</div>

					</form>

					<?php 

					if(isset($_POST['confirm_payment'])){

						$update_id = $_GET['update_id'];
           
						$amount = $_POST['amount_sent'];
						$payment_mode = $_POST['payment_mode'];
						$payment_date = $_POST['date'];

						$complete = "Complete";

						$insert_payment = "INSERT into payments (amount,payment_mode,payment_date) values ('$amount','$payment_mode','$payment_date')";

						$run_payment = mysqli_query($conn,$insert_payment);

						$update_customer_order = "UPDATE customer_orders set order_status='$complete' where order_id='$update_id'";

						$run_customer_order = mysqli_query($conn,$update_customer_order);

						$update_pending_order = "UPDATE pending_orders set order_status='$complete' where order_id='$update_id'";

						$run_pending_order = mysqli_query($conn,$update_pending_order);

						if($run_pending_order){

							echo "<script>alert('Thank you for purchasing, your order will be completed and delivered within 24 hours work.')</script>";
							echo "<script>window.open('my_account.php?my_orders','_self')</script>";
						}
					}

					?>
				</div>
			</div>

		</div>
	</div>

	<?php include ("includes/footer.php"); ?>


	
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>
<?php } ?>