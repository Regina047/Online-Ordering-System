<div id="footer"> <!--- footer begin--->
	<div class="container"> <!--- container begin--->
		<div class="row"> <!--- row begin--->
			<div class="col-sm-6 col-md-3"> <!--- col-sm-6 col-md-3 begin--->
				

			</div> <!--- col-sm-6 col-md-3 finish--->

				<div class="com-sm-6 col-md-3"> <!--- com-sm-6 col-md-3 begin--->
					
					<h4>Top Products Category</h4>

					<ul> <!--- ul begin--->
						<?php 

						$get_m_cats = "select * from menu_categories";
						$run_m_cats = mysqli_query($conn,$get_m_cats);

						while($row_m_cats=mysqli_fetch_array($run_m_cats)){
							$p_cat_id = $row_m_cats['m_cat_id'];
							$p_cat_title = $row_m_cats['m_cat_title'];

							echo "

							<li>

							<a href='shop.php?m_cat=$p_cat_id'>

							$p_cat_title

							</li>
							";
						}

						?>
					</ul> <!--- ul finish--->

					<hr class="hidden-md hidden-lg">

				</div> <!--- com-sm-6 col-md-3 finish--->

				<div class="col-sm-6 col-md-3"> <!--- col-sm-6 col-md-3 begin--->
					
					<h4>Find Us</h4>

					<p>  <!--- p  begin--->
						
						<strong>Iconic Plate.Inc</strong>
						<br/>Bicol University
						<br/>Polangui Campus
						<br/>+63-9273-39-8102
						<br/>iconicplate@gmail.com
						<br/><strong>Platonic Squad</strong>

					</p>  <!---p finish--->

					<a href="contact.php">Check Our Contact Page</a>

					<hr class="hidden-md hidden-lg">

				</div> <!--- col-sm-6 col-md-3 finish--->

				<div class="col-sm-6 col-md-3">  <!--- col-sm-6 col-md-3 begin--->


				<h4>Pages</h4>

				<ul> <!--- ul begin--->
					<li><a href="Cart.php">Shopping Cart</a></li>
					<li><a href="contact.php">Message Us</a></li>
					<li><a href="shop.php">Menu</a></li>
					<li><a href="customer/my_account.php?my_orders">My Account</a></li>
				</ul> <!--- ul finish--->

				<hr>

				<h4>User Section</h4>

				<ul> <!--- ul begin--->
					<?php

                           if(!isset($_SESSION['cust_username'])){

                            echo "<a href='checkout.php'>Login</a>";

                           }else{

                             echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

                           }


                            ?>
                     <li>
                     	<?php

                           if(!isset($_SESSION['cust_username'])){

                            echo "<a href='customer_register.php'>Register</a>";

                           }else{

                             echo "<a href='customer/my_account.php?edit_account'>Edit Account</a>";

                           }


                            ?>
                     </li>
				</ul> <!--- ul finish--->

				<hr class="hidden-md hidden-lg hidden-sm">

				</div>  <!--- col-sm-6 col-md-3 finish--->

		</div> <!--- row finish--->
	</div> <!--- container finish--->
</div><!---footer finish--->

<div id="copyright">
	<div class="container">
		<div class="col-md-6">
			<p class="pull-left">
				&copy; 2021 Iconicplate All Rights Reserve.
			</p>
		</div>
		<div class="col-md-6">
			<p class="pull-right">
				Theme by: Platonic Squad
			</p>
		</div>
	</div>
</div>