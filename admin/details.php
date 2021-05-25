<?php

$active='Cart';
include("includes/db_conn.php");

include("header.php");

 ?>
<div id="content"> <!--- content begin--->
		<div class="container"> <!--- container begin--->
			<div class="col-md-12"><!--- col-md-12 begin--->
				<ul class="breadcrumb"> <!--- breadcrumb begin--->
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						Shop
					</li>
					
					

				</ul> <!--- breadcrumb finish--->
			</div> <!--- col-md-12 finish--->

			<div class="col-md-3"> <!--- col-md-3 begin--->
				
				<?php include ("sidebar.php"); ?>

			</div> <!--- col-md-3 finish--->

			
				<div class="col-md-9"> <!--- col-md-9 begin--->
					<div id="productMain" class="row"> <!--- productMain row begin--->
						<div class="col-sm-6"> <!--- col-sm-6 begin--->
							<div id="mainImage"> <!--- mainImage begin--->
								<div id="myCarousel" class="carousel slide" data-ride="carousel"><!--- Carousel-slide begin--->
									
									<div class="carousel-inner">
										<div class="item active">
											<center><img class="img-responsive" src="admin/menu_images/<?php echo  $pro_img1;?>" alt="Product 3-a"></center>
										</div>
									</div>

								</div> <!---  Carousel-slide finish--->
							</div> <!---mainImage finish--->
						</div> <!--- col-sm-6 finish--->

							<div class="col-sm-6">
								<div class="box">
									<h1 class="text-center"><?php echo $pro_title; ?></h1>

									<?php   add_cart(); ?>

									<form action="details.php?add_cart=<?php echo $pro_id; ?>" class="form-horizontal" method="post">
										<div class="form-group">
											<label for="" class="col-md-5 control-label">Products Quantity</label>

											<div class="col-md-7">
												<select name="product_qty" id="" class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>

										</div>

									

										<p class="price">₱ <?php echo $pro_price; ?></p>
										<p class="text-center buttons">
											<button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button>
										</p>

									</form>
								</div>

							</div>
					</div> <!--- productMain row finish--->

					<div class="box" id="details">
						<h4>Product Details</h4>
						<p>
							<?php echo $pro_desc; ?>
						</p>
						
						<hr>
					</div>


					

					<div id="row same-heigh-row"><!--- productMain row finish--->
						<div class="col-md-3 col-sm-6">
							<div class="box same-height headline">
								<h3 class="text-center">Products You May Like</h3>
							</div>
						</div>

						<?php 

						$get_products = "SELECT * from menu order by rand() LIMIT 0,3";

						$run_products = mysqli_query($conn,$get_products);

						while($row_menu=mysqli_fetch_array($run_products)){
							$pro_id = $row_menu['menu_id'];
							$pro_title = $row_menu['menu_title'];
							$pro_img1 = $row_menu['menu_img1'];
							$pro_price = $row_menu['menu_price'];

							echo "

							<div class='col-md-3 col-sm-6 center-responsive'>

							<div class='product same-height'>

								<a href='details.php?pro_id=$pro_id'>

									<img class'img-responsive' src='admin/menu_images/$pro_img1'>
								</a>

								<div class='text'>

									<h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>

									<p class='price'>

										$pro_price

									</p>

								</div>


							</div>


							</div>



							";
						}

						?>

						</div>

				</div> <!--- col-md-9 finish--->

		</div> <!--- container finish--->
	</div> <!--- content finish--->



	<?php include("comment.php"); ?>


	<?php include ("footer.php"); ?>

	


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
