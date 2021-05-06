<div id="footer"> <!--- footer begin--->
	<div class="container"> <!--- container begin--->
		<div class="row"> <!--- row begin--->
			<div class="col-sm-6 col-md-3"> <!--- col-sm-6 col-md-3 begin--->
				<h4>Know The Hottest Deals</h4>

					<p class="text-muted">
					 Dont miss our latest update.
					</p>

					<form action="get" method="post">  <!--- form begin--->
						<div class="input-group">  <!--- input-group begin--->
							
							<input type="text" class="form-control" name="email">

							<span class="input-group-btn">  <!--- iput-group btn begin--->
								<input type="submit" value="subscribe" class="btn btn-default">
							</span>  <!---iput group btn finish--->


						</div>  <!--- input-group finish--->
					</form>   <!--- form fonish--->

					<hr>

					<h4>Keep In touch</h4>

					<p class="social">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="##" class="fa fa-instagram"></a>
						<a href="#" class="fa fa-google-plus"></a>
						<a href="#" class="fa fa-envelope"></a>

					</p>
				<hr class="hidden-md hidden-lg hidden-sm">

			</div> <!--- col-sm-6 col-md-3 finish--->

				<div class="com-sm-6 col-md-3"> <!--- com-sm-6 col-md-3 begin--->
					
					<h4>Top Products Category</h4>

					<ul> <!--- ul begin--->
						<?php 

						$get_p_cats = "select * from menu_categories";
						$run_p_cats = mysqli_query($conn,$get_p_cats);

						while($row_p_cats=mysqli_fetch_array($run_p_cats)){
							$p_cat_id = $row_p_cats['m_cat_id'];
							$p_cat_title = $row_p_cats['m_cat_title'];

							echo "

							<li>

							<a href='shop.php?p_cat=$p_cat_id'>

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
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="my_account.php">My Account</a></li>
				</ul> <!--- ul finish--->

				<hr>

				<h4>User Section</h4>

				<ul> <!--- ul begin--->
					<li><a href="checkout.php">Login</a></li>
					<li><a href="customer_register.php">Register</a></li>
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
