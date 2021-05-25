<?php
session_start();

include_once("includes/db_conn.php");
include("functions/function.php");
 ?>


<?php

if(isset($_GET['c_id'])){

	$customer_id = $_GET['c_id'];
}

$ip_add =  getRealIpUser();

$status = "Pending";

$invoice_no = mt_rand();

$select_cart = "SELECT * from cart where ip_add ='$ip_add' ";

$run_cart = mysqli_query($conn,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart )){

	$pro_id = $row_cart['p_id'];
	$qty = $row_cart['qty'];
	
	$get_product = "SELECT * from menu where menu_id='$pro_id' ";

	$run_products = mysqli_query($conn,$get_product); 

	while($row_product = mysqli_fetch_array($run_products)){

		$sub_total = $row_product['menu_price']*$qty;

		$insert_customer_order = "INSERT into customer_orders (cust_id, due_amount, invoice_no, qty, order_date, order_status) values ('$customer_id ','$sub_total','$invoice_no ','$qty',NOW(),'$status')";

		$run_customer_order = mysqli_query($conn,$insert_customer_order );

		$insert_pending_order = "INSERT into pending_orders (cust_id, invoice_no,menu_id, qty, order_status) values ('$customer_id','$invoice_no','$pro_id','$qty','$status')";

		$run_pending_order = mysqli_query($conn,$insert_pending_order );

		$delete_cart = "DELETE from cart where ip_add='$ip_add'";

		$run_delete = mysqli_query($conn, $delete_cart );

		echo "<script>alert('An item added to your order list, Thank you!')</script>";
		echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";


	}
}



 ?>