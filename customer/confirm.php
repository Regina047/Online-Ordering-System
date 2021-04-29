
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
					<h1 align-center>Please Confirm Your Payment</h1>
					<form action="confirm.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Invoice No: </label>
							<input type="text" class="form-control" name="invoice_no" required>
						</div>
						<div class="form-group">
							<label>Amount Sent: </label>
							<input type="text" class="form-control" name="amount_sent" required>
						</div>
						<div class="form-group">
							<label>Select Payment Mode: </label>
							<select type="text" class="form-control">
								<option>Select Payment Mode</option>
								<option>Back Code</option>
								<option>COD- Cash On Delivery</option>
								<option>Gcash</option>
								<option>Paymaya</option>
								<option>Western Union</option>
							</select>
						</div>

						<div class="form-group">
						<label>Transaction / Referrence ID: </label>
						<input type="text" class="form-control" name="ref_no" required>
						</div>

						<div class="form-group">
						<label> Code </label>
						<input type="text" class="form-control" name="code" required>
						</div>

						<div class="form-group">
						<label>Payment Date: </label>
						<input type="text" class="form-control" name="date" required>
						</div>

						<div class="text-center">
							<button class="btn btn-primary btn-lg">
								<i class="fa fa-user-md"></i> Confirm Payment
							</button>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	<?php include ("footer.php"); ?>


	
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>