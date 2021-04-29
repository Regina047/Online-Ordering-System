
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
	
<?php include ("../top.php"); ?>
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="../index.php">Home</a>
					</li>
					<li>
						My Account
					</li>
				</ul>
			</div>

			<div class="col-md-3">
				
				<?php include ("sidebar.php"); ?>

			</div>

			<div class="col-md-9">
				<div class="box">
					<?php 
					if(isset($_GET['my_orders'])){
					include("my_orders.php");
					}

					?>

					<?php 
					if(isset($_GET['pay_offline'])){
					include("pay_offline.php");
					}

					?>

					<?php 
					if(isset($_GET['edit_account'])){
					include("edit_account.php");
					}

					?>


					<?php 
					if(isset($_GET['change_pass'])){
					include("change_pass.php");
					}

					?>


					<?php 
					if(isset($_GET['delete_account'])){
					include("delete_account.php");
					}

					?>
				</div>
			</div>
		</div>
	</div>

	<?php include ("footer.php"); ?>

	
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>