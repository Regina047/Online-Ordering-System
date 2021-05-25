<?php 

$customer_session = $_SESSION['cust_username'];

$get_customer = "select * from customer where cust_username='$customer_session'";

$run_customer = mysqli_query($conn,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['cust_id'];

$customer_firstname = $row_customer['cust_firstname'];


$customer_lastname = $row_customer['cust_lastname'];


$customer_middlename = $row_customer['cust_middlename'];


$customer_province = $row_customer['cust_province'];


$customer_city = $row_customer['cust_city'];


$customer_brgy = $row_customer['cust_brgy'];


$customer_zipcode = $row_customer['cust_zipcode'];


$customer_contactNo = $row_customer['cust_contactNo'];


$customer_email = $row_customer['cust_email'];


$customer_username = $row_customer['cust_username'];


$customer_image = $row_customer['cust_image'];



?>

<h1 align="Center"> Edit Your Account</h1>
<form action="" method="post" enctype="multipart/form-data">

                <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                 <div class="form-group">
                                 	<label>First Name:</label>
                                    <input type="text" name="c_fname" class="form-control text-secondary" value="<?php echo $customer_firstname; ?>" required>     
                                    
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-12 col-lg-4">
                                 <div class="form-group">
                                 	<label>Last Name:</label>
                                    <input type="text" name="c_lname" class="form-control text-secondary"  value="<?php echo$customer_lastname; ?>" required>     
                                   
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-12 col-lg-4">
                                 <div class="form-group">
                                 	<label>Middle Name:</label>
                                    <input type="text" name="c_mname" class="form-control text-secondary"  value="<?php echo $customer_middlename; ?>" required>     
                                    
                                 </div>
                             </div>
                         </div>


                          <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                 <div class="form-group">
                                 	<label>Province:</label>
                                    <input type="text" name="c_province" class="form-control text-secondary"   value="<?php echo $customer_province; ?>"  required>     
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-12 col-lg-4">
                                 <div class="form-group">
                                 	<label>City / Municipality:</label>
                                    <input type="text" name="c_city" class="form-control text-secondary"    value="<?php echo $customer_city; ?>" required>     
                                   
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-12 col-lg-4">
                                 <div class="form-group">
                                 	<label>Barangay:</label>
                                    <input type="text" name="c_brgy" class="form-control text-secondary"    value="<?php echo $customer_brgy; ?>"  required>     
                                   
                                 </div>
                             </div>
                         </div>


                          <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                 <div class="form-group">
                                 	<label>Zipcode:</label>
                                    <input type="text" name="c_zipcode" class="form-control text-secondary"   value="<?php echo $customer_zipcode; ?>"  required>     
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-12 col-lg-4">
                                 <div class="form-group">
                                 	<label>Contact Number:</label>
                                    <input type="text" name="c_contact" class="form-control text-secondary" value="<?php echo
$customer_contactNo; ?>"  required>     
                                   
                                 </div>
                             </div>
                            
                         </div>




              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="c_email"   value="<?php echo $customer_email ; ?>"  required>
              </div>

              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="c_username"   value="<?php echo $customer_username; ?>"  required>
              </div>
           
              <div class="form-group">
                <label>Your Profile Picture</label>
                <input type="file" class="form-control form-height-custom"  name="c_image"  required>
                <img class="img-responsive" src="customer_images/<?php echo $customer_image; ?>" alt="customer image">
              </div>
              <div class="text-center">
                <button name="update" class="btn btn-primary">
                <i class="fa fa-user-md"></i> Update Now
                </button>
                
              </div>
            </form>

            <?php

            	if(isset($_POST['update'])){

            		$update_id = $customer_id;

            		$c_fname = $_POST['c_fname'];
            		$c_lname = $_POST['c_lname'];
            		$c_mname = $_POST['c_mname'];
            		$c_province = $_POST['c_province'];
            		$c_city = $_POST['c_city'];
            		$c_brgy = $_POST['c_brgy'];
            		$c_zipcode = $_POST['c_zipcode'];
            		$c_contact = $_POST['c_contact'];
            		$c_email = $_POST['c_email'];
            		$c_username = $_POST['c_username'];
            		$c_image = $_FILES['c_image']['name'];
            		$c_image_tmp = $_FILES['c_image']['tmp_name'];

            		move_uploaded_file($c_image_tmp,"customer_images/$c_image");

            		$update_customer = "update customer set cust_firstname='$c_fname', cust_lastname='$c_lname', cust_middlename='$c_mname', cust_province='$c_province', cust_city='$c_city', cust_brgy='$c_brgy', cust_zipcode='$c_zipcode', cust_contactNo='$c_contact', cust_email='$c_email', cust_username='$c_username', cust_image='$c_image' where cust_id='$update_id'";

            		$run_customer = mysqli_query($conn,$update_customer);

            		if($run_customer){

            			echo "<script>alert('Your account has been edited, to complete the process please relogin')</script>";
            			echo "<script>window.open('logout.php','_self')</script>";
            		}
            	}


             ?>