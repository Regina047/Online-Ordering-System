<?php

$active='Shop';
include("includes/db_conn.php");

include ("header.php"); 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iconicplate store || PHP</title>
	<link rel="stylesheet"  href="styles/bootstrap-337.min.css">
	<link rel="stylesheet"  href="styles/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	

	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						Menu
					</li>
					
				</ul>
			</div>

			<div class="col-md-3">
				
				<?php include ("sidebar.php"); ?>

			</div>

			<div class="col-md-9"> <!--- col-md-9 begin--->

				<?php

				if(!isset($_GET['m_cat '])) {

					if(!isset($_GET['cat'])){ 

					// echo "
					// <div class='box'> <!--- box begin--->
					// 	<h1>Menu</h1>
					// 	<p> The meals your looking for.</p>
					// </div> <!--- box finish--->
					// ";
				}

				}

				?>
				<div class="row">
				<?php

				if(!isset($_GET['m_cat'])){
					if(!isset($_GET['cat'])){

						$per_page=6;

						if(isset($_GET['page'])){
							$page = $_GET['page'];

							}else{

								$page=1;
							}


							$start_from = ($page-1) * $per_page;
							$get_menu = "SELECT * from menu order by 1 DESC LIMIT $start_from,$per_page";
							$run_menu = mysqli_query($conn,$get_menu);

							while ($row_menu=mysqli_fetch_array($run_menu )) {
								$pro_id = $row_menu['menu_id'];

								$pro_title = $row_menu['menu_title'];
								$pro_price = $row_menu['menu_price'];
								$pro_img1 = $row_menu['menu_img1'];

								echo "

									<div class='col-md-4 col-sm-6 center-responsive'>
										<div class='product'>

											<a href='details.php?pro_id=$pro_id'>

												<img class='img-responsive' src='admin/menu_images/$pro_img1'>

											 </a>
											 <div class='text'>
											 	<h3>
											 		<a href='details.php?pro_id=$pro_id'>$pro_title</a>
											 	</h3>
											 	<p class='price'>

											 		₱ $pro_price

											 	</p>

											 	<p class='button'>

											 		<a class='btn btn-default' href='details.php?pro_id=$pro_id'>
											 				View Details
											 		</a>
											 		<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
											 				<i class='fa fa-shopping-cart'></i>Add to Cart
											 		</a>
											 </div>

										</div>


									</div>





								";

							}


						
				?>

			</div>
			<center>


			<ul class="pagination">

				<?php

				$query = "SELECT * from menu";

				$result = mysqli_query($conn,$query);
				$total_records = mysqli_num_rows($result);
				$total_pages = ceil($total_records / $per_page);

					echo "
						<li>
							<a href='shop.php?page=1'> ".'First Page'." </a>
						</li>
					";

					for($i=1; $i<=$total_pages; $i++){

						echo "
						<li>
							<a href='shop.php?page=".$i."'> ".$i." </a>
						</li>
					";

					};



					echo "
						<li>
							<a href='shop.php?page=$total_pages'> ".'Last Page'." </a>
						</li>
					";

					}
				}

				?>
				
			</ul>
		</center>
	

						<?php  

						getcatpro(); 
					


						?>

					

			</div> <!--- col-md-9 finish--->

		</div>
	</div>

	<?php include ("footer.php"); ?>

	
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>

