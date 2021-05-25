<div class="panel panel-default sidebar-menu">
	
	<div class="panel-heading">
		<?php 

			$customer_session = $_SESSION['cust_username'];

			$get_customer = "select * from customer where cust_username='$customer_session'";

			$run_customer = mysqli_query($conn, $get_customer);

			$row_customer = mysqli_fetch_array($run_customer);

			$customer_image = $row_customer['cust_image'];

			$customer_fname = $row_customer['cust_firstname'];
			$customer_lname = $row_customer['cust_lastname'];
			$customer_mname = $row_customer['cust_middlename'];

			if(!isset($_SESSION['cust_username'])){

			}else{

				echo "
					<center>
						<img src='customer_images/$customer_image' class='img-responsive'>

					</center>

					<br/>

					<h3 class='panel-title' align='center'>

					 $customer_fname $customer_mname $customer_lname

					</h3>

				";

			}

		?>


	</div>

	<div class="panel-body">
		<ul class="nav-pills nav-stacked nav">
			<li class="<?php if(isset($_GET['my_orders'])){echo "active"; } ?>">
				<a href="my_account.php?my_orders">
					<i class="fa fa-list"></i> My Orders
				</a>
			</li>
			
				<li class="<?php if(isset($_GET['edit_account'])){echo "active"; } ?>">
				<a href="my_account.php?edit_account">
					<i class="fa fa-pencil"></i> Edit Account
				</a>
			</li>
			<li class="<?php if(isset($_GET['change_pass'])){echo "active"; } ?>">
				<a href="my_account.php?change_pass">
					<i class="fa fa-user"></i> Change Password
				</a>
			</li>
				<li class="<?php if(isset($_GET['delete_account'])){echo "active"; } ?>">
				<a href="my_account.php?delete_account">
					<i class="fa fa-trash-o"></i> Delete Account
				</a>
			</li>
			<li>
				<a href="logout.php">
					<i class="fa fa-sign-out"></i> Log Out
				</a>
			</li>
		</ul>
	</div>
</div>