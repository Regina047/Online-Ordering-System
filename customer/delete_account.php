<center>
	<h1>Do you really want to delete your ccount?</h1>
	<form action="" method="post">
		<input type="submit" name="Yes" Value="Yes I want to Delete" class="btn btn-danger">
		<input type="submit" name="No" Value="No I Dont want to Delete" class="btn btn-primary">
	</form>
</center>

<?php 

$c_username = $_SESSION['cust_username'];

if(isset($_POST['Yes'])){

$delete_account = "delete from customer where cust_username='$c_username'";

$run_delete_customer = mysqli_query($conn,$delete_account);

if($run_delete_customer){

	session_destroy();

	echo "<script>alert('Your Account has been successfully deleted, Goodbye motherfucker!')</script>";

	echo "<script>window.open('../index.php','_self')</script>";
}
}

if(isset($_POST['No'])){

	echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}

?>