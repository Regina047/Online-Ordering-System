<center>
	
<h1>My Orders</h1>

<p class="lead">Your orders in One place</p>

<p class="text-muted">If you have question, feel free to <a href="../contact.php">Contact Us</a>. Our customer service work <strong>24/7</strong></p>

</center>

<hr>

<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>ON: </th>
				<th>Due Amount: </th>
				<th>Invoice No: </th>
				<th>Qty: </th>
				<th>Order Date: </th>
				<th>Paid / Unpaid: </th>
				<th>Status: </th>
			</tr>
		</thead>
		<tbody>

			<?php

			$customer_session = $_SESSION['cust_username'];

			$get_customer = "SELECT * from customer where cust_username='$customer_session'";
			$run_customer = mysqli_query($conn,$get_customer);
			$row_customer=mysqli_fetch_array($run_customer);

			$customer_id = $row_customer['cust_id'];

			$get_orders = "SELECT* from customer_orders where cust_id='$customer_id'";

			$run_orders = mysqli_query($conn,$get_orders);

			$i = 0;

			while($row_orders = mysqli_fetch_array($run_orders)){

				$order_id = $row_orders['order_id'];
				$due_amount = $row_orders['due_amount'];
				$invoice_no = $row_orders['invoice_no'];
				$qty = $row_orders['qty'];
				$order_date = substr($row_orders['order_date'],0,11);
				$order_status = $row_orders['order_status'];

				$i++;

				if($order_status=='Pending'){

					$order_status = 'Unpaid';

				}else{
					$order_status = 'Paid';
				}


			 ?>
			<tr>
				<th><?php echo $i; ?></th>
				<td><?php echo $due_amount; ?></td>
				<td><?php echo $invoice_no; ?></td>
				<td><?php echo $qty; ?></td>
				<td><?php echo $order_date; ?></td>
				<td><?php echo $order_status; ?></td>
				<td>
					<a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"> Confirm Paid</a>
				</td>
			</tr>
			<?php 	} ?>
		</tbody>
	</table>
</div>