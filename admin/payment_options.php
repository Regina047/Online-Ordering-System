<div class="box">
	<?php


	$session_email = $_SESSION['cust_username'];

	$select_customer = "SELECT * from customer where cust_username='$session_email'";

	$run_customer = mysqli_query($conn,$select_customer);

	$row_customer = mysqli_fetch_array($run_customer);

	$customer_id = $row_customer['cust_id'];



	 ?>
	 <center>
	<p class="lead text-center">
		<h1><a href="order.php?c_id=<?php echo $customer_id ?>">Offline Pay</a></h1>
	</p>
</center>

</div>