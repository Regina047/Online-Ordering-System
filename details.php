<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>

	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<title>Iconic Plate</title>
		<link rel="stylesheet" href="styles/style.css">
		<link rel="stylesheet" href="styles/bootstrap-337.min.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<div><?php require "header.php"?></div>


<div class="content">
	<div class="container">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					Shop
				</li>
			</ul>
		</div>

		<div class="col-md-3">
			<?php require "sidebar.php"?>				
		</div>

		<div class="col-md-9">
			<div id="productMain" class="row">
				<div class="col-sm-6">
					<div id="mainImage">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>

							<div class="carousel-inner">
								<div class="item active">
									<center><img class="img-responsive" src="img/bulalo1.jpg" alt=""></center>
								</div>
								<div class="item">
									<center><img class="img-responsive" src="img/bulalo1.jpg" alt=""></center>
								</div>
								<div class="item">
									<center><img class="img-responsive" src="img/bulalo1.jpg" alt=""></center>
								</div>
								
							</div>

							<a href="#myCarousel" class="left carousel-control" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>

							<a href="#myCarousel" class="right carousel-control" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>


<center>
	<ul class="pagination">
		<li><a href="#">First Page</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">Last Page</a></li>
		
	</ul>
</center>



<div><?php require "footer.php"?></div>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>