<?php

$active='Home';
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
	
	
	<?php include ("header.php"); ?>
	<?php include ("slider.php"); ?>

	<?php include ("latest_product.php"); ?>
	<?php include ("footer.php"); ?>

	<script src="js/bootstrap-337.min"></script>
	<script src="js/jquery-331.min.js"></script>
</body>
</html>