<h1 align="Center"> Change Password</h1>


<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Old Password</label>
		<input type="text" name="old_pass" class="form-control" required>
	</div>
	<div class="form-group">
		<label> New Password</label>
		<input type="text" name="new_pass" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Confirm New Password</label>
		<input type="text" name="new_pass_again" class="form-control" required>
	</div>
	<div class="text-center">
			<button name="submit" class="btn btn-primary">
			<i class="fa fa-user-md"></i> Update Now
		</button>
	</div>
</form>

<?php

if(isset($_POST['submit'])){

	$c_username = $_SESSION['cust_username'];

	$c_old = $_POST['old_pass'];
	$c_new = $_POST['new_pass'];
	$c_new_pass_again = $_POST['new_pass_again'];

	$sel_old_pass = "select * from customer where cust_password='$c_old'";

	$run_c_old_pass= mysqli_query($conn,$sel_old_pass);

	$check_c_old_pass = mysqli_fetch_array($run_c_old_pass);

	if($check_c_old_pass==0){

		echo "<script>alert('Sorry your current password did not valid, Please try again.')</script>";
		exit();
	}

	if($c_new!=$c_new_pass_again){

		echo "<script>alert('Sorry,your new Password did not match, try again.')</script>";
		exit();
	}

	$update_c_pass = "update customer set cust_password='$c_new' where cust_username='$c_username'";

	$run_c_pass = mysqli_query($conn,$update_c_pass);

	if($run_c_pass){

			echo "<script>alert('Your password has been updated')</script>";
			echo "<script>window.open('my_account.php?my_orders','_self')</script>";
		
	}
}


 ?>