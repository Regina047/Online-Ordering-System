<?php
include("includes/db_conn.php");


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
	<div id="hot"> <!--- hot begin--->
		<div class="box">
			<div class="container"> <!--- container begin--->
				<div class="col-md-12"> <!--- col-md-12 begin--->
					<h2>
						Our Latest Products
					</h2>
				</div><!--- col-md-12 finish--->
			</div><!--- container finish--->
			</div>
	</div><!--- hot finish--->

	<div id="content" class="container"> <!--- container begin--->
		<div class="row"> <!--- row begin--->
			<?php

			getPro();

			?>
		</div> <!--- row finish--->
	</div> <!--- container finish--->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</body>
</html>