

<div class="box">
	

	<div class="box-header">

		<center>
			
			<h1>Login</h1>

			<p class="lead"> Already have an account . . .?</p>

			<p class="text-muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quidem nulla quos. Perferendis facilis adipisci aspernatur quas suscipit, officiis. Placeat quae porro alias sit quos pariatur molestias sapiente recusandae officiis?</p>

		</center>

	</div>

	<form method="post" action="checkout.php">'

		<div class="form-group">
			
			<label>Username</label>

			<input name="c_username" type="text" class="form-control" required>

		</div>


		<div class="form-group">
			
			<label>Password</label>

			<input name="c_password" type="password" class="form-control" required>

		</div>

		<div class="text-center">
			<button name="login" value="Login" class="btn btn-primary">
				<i class="fa fa-sign-in"></i> Login
			</button>
		</div>

	</form>

	<center>
		
		<a href="customer_register.php">

			<br>
			
			Dont have an account..? Register Here.

		</a>


	</center>


</div>

<?php 

if(isset($_POST['login'])){

	$customer_username = $_POST['c_username'];
	$customer_password = $_POST['c_password'];

	$select_customer = "select * from customer where cust_username='$customer_username' AND cust_password='$customer_password'";

	$run_customer = mysqli_query($conn,$select_customer);

	$get_ip = getRealIpUser();

	$check_customer = mysqli_num_rows($run_customer);

	$select_cart = "select * from cart where ip_add='$get_ip '";

	$run_cart = mysqli_query($conn, $select_cart);

	$check_cart = mysqli_num_rows($run_cart);

	if($check_customer==0){

		echo "<script>alert(Your email or password is wrong)</script>";

		exit();
	}

	if($check_customer==1 AND 	$check_cart==0){

		$_SESSION['cust_username']=$customer_username ;

		echo "<script>alert('Your are Logging in')</script>";

		echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
	}else{

		$_SESSION['cust_username']=$customer_username ;

		echo "<script>alert('Your are Logging in')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";
	}

}


?>