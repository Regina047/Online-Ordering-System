<?php
   if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";
    }else{
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<title>Insert Products</title>


</head>
<body>

	<div class="row">
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Insert Products
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heding">
					<h3 class="panel-title">
						<i class="fa fa-money fa-fa"></i> Insert Product
					</h3>
				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">

						<div class="form-group">
							<label class="col-md-3 control-label"> Product Title </label>
							<div class="col-md-6">
								<input type="text" name="menu_title" class="form-control" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label"> Product Category </label>
							<div class="col-md-6">
								<select name="menu_cat" class="form-control">
									<option> Select a Category Product </option>

									<?php
									$get_m_cats = "SELECT * from menu_categories";
									$run_m_cats = mysqli_query($conn,$get_m_cats);

									while ($row_m_cats=mysqli_fetch_array($run_m_cats)) {
										$m_cat_id = $row_m_cats['m_cat_id'];
										$m_cat_title = $row_m_cats['m_cat_title'];


										echo "
										<option value='$m_cat_id'>$m_cat_title</option>
										";
									}

									?>

								</select>
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-3 control-label"> Product Image 1 </label>
							<div class="col-md-6">
								<input type="file" name="menu_img1" class="form-control" required="">
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-3 control-label"> Product Price</label>
							<div class="col-md-6">
								<input type="text" name="menu_price" class="form-control" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label"> Product Keywords </label>
							<div class="col-md-6">
								<input type="text" name="menu_keywords" class="form-control" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label"> Product Description </label>
							<div class="col-md-6">
								<textarea name="menu_desc" cols="19" rows="6" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label"></label>
							<div class="col-md-6">
								<input type="submit" class="btn btn-primary form-control" name="submit" value="Insert Product">
							</div>
						</div>
						
					</form>
					
				</div>

			</div>
			
		</div>
		
	</div>





	<script src="js/tinymce/tinymce.min.js"></script>
	<script> tinymce.init({selector:'textarea'});</script>
</body>
</html>


<?php

if(isset($_POST['submit'])){

	$menu_title = $_POST['menu_title'];
	$menu_cat = $_POST['menu_cat'];

	$menu_price = $_POST['menu_price'];
	$menu_keywords = $_POST['menu_keywords'];
	$menu_desc = $_POST['menu_desc'];

	$menu_img1 = $_FILES['menu_img1']['name'];
	

	$temp_name1 = $_FILES['menu_img1']['tmp_name'];
	

	

	move_uploaded_file($temp_name1,"menu_images/$menu_img1");
	

	$insert_menu = "INSERT into menu(m_cat_id, date, menu_title, menu_img1, menu_price, menu_keywords, menu_desc) values('$menu_cat',NOW(), '$menu_title', '$menu_img1','$menu_price', '$menu_keywords', '$menu_desc')";


	$run_menu = mysqli_query($conn,$insert_menu);


	if($run_menu){

	echo "<script>alert('Product has been inserted successfully')</script>";
	echo "<script>window.open('index.php?view_menu','_self')</script>";


	}



}

?>

<?php } ?>