<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		
		<title>Order</title>
			<link rel="stylesheet" href="styles/style.css">
			<link rel="stylesheet" href="styles/bootstrap-337.min.css">
			<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		<!-- <link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	</head>
	<body>
		<?php require "header.php"?>
		<!-- order details -->
	<div class="small-container cart-page">
			<table>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/about.jpg">
						<div>
							<p>Product name</p>
							<small>prize</small>
							<br/>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="0"></td>
				<td>price</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/about.jpg">
						<div>
							<p>Product name</p>
							<small>prize</small>
							<br/>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="0"></td>
				<td>price</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/about.jpg">
						<div>
							<p>Product name</p>
							<small>prize</small>
							<br/>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="0"></td>
				<td>price</td>
			</tr>
		</table>
		<div class="total-price">
		<table>
			<tr>
				<td>Subtotal</td>
				<td>Price</td>
			</tr>
			<tr>
				<td>tax</td>
				<td>Price</td>
			</tr>
			<tr>
				<td>Total</td>
				<td>Price</td>
			</tr>
		</table>
	</div>
	</div>
	
		<?php require "footer.php"?>


		<script src="js/jquery-331.min.js"></script>
		<script src="js/bootstrap-337.min.js"></script>

	</body>
</html>