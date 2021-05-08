<?php
$active='Account';
include("includes/db_conn.php");
include("functions/function.php");

if(isset($_POST['register'])){

	$c_fname = $_POST['c_fname'];
	$c_lname = $_POST['c_lname'];
	$c_mname = $_POST['c_mname'];
	$c_province = $_POST['c_province'];
	$c_city = $_POST['c_city'];
	$c_brgy = $_POST['c_brgy'];
	$c_zipcode = $_POST['c_zipcode'];
	$c_contact = $_POST['c_contact'];
	$c_gender = $_POST['c_gender'];
	$c_email = $_POST['c_email'];
	$c_username = $_POST['c_username'];
	$c_pass = $_POST['c_pass'];
	$c_cpassword = $_POST['c_cpassword'];
	$c_image = $_FILES['c_image']['name'];
	$c_image_tmp = $_FILES['c_image']['temp_name'];
	$c_ip = getRealIpUser();

	move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

	$insert_customer = "insert into customer (cust_firstname,cust_lastname,cust_middlename,cust_province,cust_city,cust_brgy,custzipcode,cust_contactNo,cust_gender,cust_email,cust_username,cust_password,cust_image,cust_ip) values ('$c_fname','$c_lname','$c_mname','$c_province','$c_city','$c_brgy','$c_zipcode ','$c_contact','$c_gender ','$c_email','$c_username ','$c_cpassword','$c_image ','$c_ip') ";

	$run_customer = mysqli_query($conn, $insert_customer);
	$sel_cart = "select * from cart where ip_add='$c_ip'";
	$run_cart = mysqli_query($conn, $sel_cart);
	$check_cart = mysqli_num_rows($run_cart);

	if($check_cart>0){

		$_SESSION['cust-email']=$c_email;

		echo "<script>alert('You have been succesfully Registered')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";

	}else{
		$_SESSION['cust-email']=$c_email;

		echo "<script>alert('You have been succesfully Registered')</script>";

		echo "<script>window.open('index.php','_self')</script>";
	}
}

 ?>
<?php include ("header.php"); ?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Register
                </li>
            </ul>
        </div>

        <div class="col-md-3">

            <?php include ("sidebar.php"); ?>

        </div>

        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2> Register a new account</h2>

                        <p class="text-muted">

                        </p>
                    </center>

                    <form action="customer_register.php" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_fname" class="form-control text-secondary" placeholder="FirstName">

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_lname" class="form-control text-secondary" placeholder="LastName">

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_mname" class="form-control text-secondary" placeholder="Middle Name">

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_province" class="form-control text-secondary" placeholder="Province">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_city" class="form-control text-secondary" placeholder="City / Municipality">

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_brgy" class="form-control text-secondary" placeholder="Brgy">

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_zipcode" class="form-control text-secondary" placeholder="Zipcode">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_contact" class="form-control text-secondary" placeholder="Contact Number">

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="c_gender" class="form-control text-secondary" placeholder="Gender">

                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="c_email" required>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="c_username" required>
                        </div>
                        <div class="form-group">
                            <label> Password</label>
                            <input type="password" class="form-control" name="c_pass" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="c_cpassword" required>
                        </div>
                        <div class="form-group">
                            <label>Your Profile Picture</label>
                            <input type="file" class="form-control" name="c_image" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="register" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Register
                            </button>

                        </div>
                    </form>

                </div>
            </div>
        </div>



    </div>
</div>

<?php include ("footer.php"); ?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>

</html>
