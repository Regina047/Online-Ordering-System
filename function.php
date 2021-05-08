<?php

$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="iconic_plate";

$db = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);


///Begin Real Input function///

function getRealIpUser(){

	switch(true){
		case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
		case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
		case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

		default : return $_SERVER['REMOTE_ADDR'];
	}
}



function add_cart(){

	global $db;

	if(isset($_GET['add_cart'])){

		$ip_add =  getRealIpUser();

		$p_id = $_GET['add_cart'];

		$product_qty = $_POST['product_qty'];

		$check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

		$run_check = mysqli_query($db,$check_product);

		if(mysqli_num_rows($run_check)>0){

			echo "<script>alert('This Product Already Added in Cart')</script>";
			echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
		}else{

			$query = "insert into cart (p_id,ip_add,qty) values ('$p_id','$ip_add','$product_qty')";

			$run_query = mysqli_query($db,$query);

			echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
		}
	}

}

/// Begin getPro Function
function getPro(){

	global $db;

	$get_menu = "SELECT * from menu order by 1 DESC LIMIT 0,8";
	$run_menu = mysqli_query($db,$get_menu);

	while ($row_menu=mysqli_fetch_array($run_menu)) {
										

		$pro_id = $row_menu['menu_id'];

		$pro_title = $row_menu['menu_title'];
		$pro_price = $row_menu['menu_price'];
		$pro_img1 = $row_menu['menu_img1'];

		echo "

		<div class = 'col-md-4 col-sm-6 single'>
			<div class='product'>
				<a href = 'details.php?pro_id=$pro_id'>
					<img class = ' img-responsive' src = 'admin/menu_images/$pro_img1'>
				</a>

				<div class = 'text'>
					<h3>

						<a href = 'details.php?pro_id=$pro_id'>
							$pro_title
						</a>

					</h3>
					<p class = 'price'>

						₱ $pro_price

					</p>

					<p class='button'>

						<a class='btn btn-default' href = 'details.php?pro_id=$pro_id'>
							View Details
						</a>
						<a class='btn btn-primary' href = 'details.php?pro_id=$pro_id'>
							<i class='fa fa-shopping-cart'></i> Add to Cart
						</a>

					</p>

				</div>

			</div>	

		</div>		

		";
	}
}

/// Finish getPro Function

/// Begin getPCats Function

function getPCats(){

	global $db;

	$get_m_cats = "SELECT * from menu_categories";
	$run_m_cats = mysqli_query($db,$get_m_cats);


	while($row_m_cats=mysqli_fetch_array($run_m_cats)){

		$m_cat_id = $row_m_cats['m_cat_id'];
		$m_cat_title = $row_m_cats['m_cat_title'];

		echo "

			<li>
				<a href='shop.php?m_cat=$m_cat_id'> $m_cat_title </a>
			</li>

		";
  
	}
}

/// Finish getPCats Function

/// Begin getCats Function

function getCats(){

	global $db;

	$get_cats = "SELECT * from categories";
	$run_cats = mysqli_query($db,$get_cats);


	while($row_cats=mysqli_fetch_array($run_cats)){

		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];

		echo "

			<li>
				<a href='shop.php?cat=$cat_id'> $cat_title </a>
			</li>

		";
	}
}


/// Finish getCats Function

/// Begin getcatpro Function

function getcatpro(){

	global $db;

	if(isset($_GET['m_cat'])){
		$m_cat_id = $_GET['m_cat'];

		$get_m_cat = "SELECT * from menu_categories where m_cat_id='$m_cat_id'";
		$run_m_cat = mysqli_query($db ,$get_m_cat);

		$row_m_cat = mysqli_fetch_array($run_m_cat);
		$m_cat_title = $row_m_cat['m_cat_title'];
		$m_cat_desc = $row_m_cat['m_cat_desc'];

		$get_menu = "SELECT * from menu where m_cat_id='$m_cat_id'";
		$run_menu = mysqli_query($db,$get_menu);

		$count = mysqli_num_rows($run_menu);
		if($count==0){
			echo "
				<div class='box'>
					<h1> No Product Found In This Category </h1>
				</div>
			";

		}else{

			echo "
				<div class='box'>
					<h1> $m_cat_title </h1>
					<p> $m_cat_desc </p>
				</div>

			";
		}

		while($row_menu=mysqli_fetch_array($run_menu)){

			$pro_id = $row_menu['menu_id'];

			$pro_title = $row_menu['menu_title'];
			$pro_price = $row_menu['menu_price'];
			$pro_img1 = $row_menu['menu_img1'];


			echo "

				<div class = 'col-md-4 col-sm-6 center-responsive'>
			<div class='product'>
				<a href = 'details.php?pro_id=$pro_id'>
					<img class = ' img-responsive' src = 'admin/menu_images/$pro_img1'>
				</a>

				<div class = 'text'>
					<h3>

						<a href = 'details.php?pro_id=$pro_id'>
							$pro_title
						</a>

					</h3>
					<p class = 'price'>

						₱ $pro_price

					</p>

					<p class='button'>

						<a class='btn btn-default' href = 'details.php?pro_id=$pro_id'>
							View Details
						</a>
						<a class='btn btn-primary' href = 'details.php?pro_id=$pro_id'>
							<i class='fa fa-shopping-cart'></i> Add to Cart
						</a>

					</p>

				</div>

			</div>	

		</div>


			";


		}


		}


	}
/// Finish getpcatpro Function

	/// Begin getmcatpro function///

	function getmcatpro(){


	global $db;

	if(isset($_GET['cat'])){
		$cat_id = $_GET['cat'];

		$get_cat = "SELECT * from categories where cat_id='$cat_id'";
		$run_cat = mysqli_query($db ,$get_cat);

		$row_cat = mysqli_fetch_array($run_cat);
		$cat_title = $row_cat['cat_title'];
		$cat_desc = $row_cat['cat_desc'];

		$get_menu = "SELECT * from menu where cat_id='$cat_id' LIMIT 0,6";
		$run_menu = mysqli_query($db,$get_menu);

		$count = mysqli_num_rows($run_menu);
		if($count==0){
			echo "
				<div class='box'>
					<h1> No Product Found In This Category </h1>
				</div>
			";

		}else{

			echo "
				<div class='box'>
					<h1> $cat_title </h1>
					<p> $cat_desc </p>
				</div>

			";

	}
	while($row_menu=mysqli_fetch_array($run_menu)){

			$pro_id = $row_menu['menu_id'];

			$pro_title = $row_menu['menu_title'];
			$pro_price = $row_menu['menu_price'];
			$pro_img1 = $row_menu['menu_img1'];

			echo "
		<div class = 'col-md-4 col-sm-6 center-responsive'>
			<div class='product'>
					<a href = 'details.php?pro_id=$pro_id'>
						<img class ='img-responsive' src = 'admin/menu_images/$pro_img1'>
					</a>

				<div class = 'text'>
					<h3>

						<a href = 'details.php?pro_id=$pro_id'>
							$pro_title
						</a>

					</h3>
					<p class = 'price'>

						₱ $pro_price

					</p>

					<p class='button'>

						<a class='btn btn-default' href = 'details.php?pro_id=$pro_id'>
							View Details
						</a>
						<a class='btn btn-primary' href = 'details.php?pro_id=$pro_id'>
							<i class='fa fa-shopping-cart'></i> Add to Cart
						</a>

					</p>

				</div>

			</div>	

		</div>


			";

		}
	}
}
/// finish getmcatpro function///

/// Begin item function///

function items(){

	global $db;

	$ip_add = getRealIpUser();

	$get_items = "select * from cart where ip_add='$ip_add'";

	$run_items = mysqli_query($db,$get_items);

	$count_items = mysqli_num_rows($run_items);

	echo $count_items;

}

/// finish item function///


/// Begin Total price function///

function total_price(){

	global $db;

	$ip_add = getRealIpUser();

	$total = 0;

	$select_cart = "select * from cart where ip_add='$ip_add'";

	$run_cart = mysqli_query($db,$select_cart);

	while($record=mysqli_fetch_array($run_cart)){

		$pro_id = $record['p_id'];

		$pro_qty =  $record['qty'];

		$get_price = "select * from menu where menu_id='$pro_id'";

		$run_price = mysqli_query($db,$get_price);

		while($row_price=mysqli_fetch_array($run_price)){

			$sub_total = $row_price['menu_price']*$pro_qty;

			$total += $sub_total;
		}
	}

	echo "₱" . $total;

}


/// finish item function///




function togglePopup() {
	document.getElementById("popup-1").classList.toggle(active);

}

