<?php
    session_start();
    include_once("includes/db_conn.php");

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";
    }else{

        $admin_session = $_SESSION['admin_email'];

        $get_admin = "SELECT * from admins where admin_email='$admin_session'";

        $run_admin = mysqli_query($conn,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];

        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];

        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        $get_products = "SELECT * from menu";
        
        $run_products = mysqli_query($conn,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "SELECT * from customer";
        
        $run_customers = mysqli_query($conn,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $get_p_categories = "SELECT * from menu_categories";
        
        $run_p_categories = mysqli_query($conn,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "SELECT * from pending_orders";
        
        $run_pending_orders = mysqli_query($conn,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iconic Plate Admin </title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }  if(isset($_GET['insert_menu'])){
                        
                        include("insert_menu.php");
                        
                }if(isset($_GET['view_menu'])){
                        
                        include("view_menu.php");

                }if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");

                }if(isset($_GET['insert_m_cats'])){
                        
                        include("insert_m_cats.php");

                }if(isset($_GET['view_m_cats'])){
                        
                        include("view_m_cats.php");
                
                }if(isset($_GET['delete_m_cats'])){
                        
                        include("delete_m_cats.php");
                
                }if(isset($_GET['edit_m_cat'])){
                        
                        include("edit_m_cat.php");
                
                }if(isset($_GET['insert_cat'])){
                         
                        include("insert_cat.php");
                
                }if(isset($_GET['view_cats'])){
                         
                        include("view_cats.php");
                
                }if(isset($_GET['edit_cat'])){
                         
                        include("edit_cat.php");
                
                }if(isset($_GET['delete_cat'])){
                         
                        include("delete_cat.php");
                
                }if(isset($_GET['insert_slide'])){
                         
                        include("insert_slide.php");
                
                }if(isset($_GET['view_slides'])){
                         
                        include("view_slides.php");
                
                }if(isset($_GET['delete_slide'])){
                         
                        include("delete_slide.php");
                
                }if(isset($_GET['edit_slide'])){
                         
                        include("edit_slide.php");
                
                }if(isset($_GET['view_customers'])){
                         
                        include("view_customers.php");
                
                }if(isset($_GET['delete_customer'])){
                         
                        include("delete_customer.php");
                
                }if(isset($_GET['view_orders'])){
                         
                        include("view_orders.php");
                
                }if(isset($_GET['delete_order'])){
                         
                        include("delete_order.php");
                
                }if(isset($_GET['view_payments'])){
                         
                        include("view_payments.php");
                
                }if(isset($_GET['delete_payment'])){
                         
                        include("delete_payment.php");
                
                }if(isset($_GET['view_users'])){
                         
                        include("view_users.php");
                
                }if(isset($_GET['delete_user'])){
                         
                        include("delete_user.php");
                
                }if(isset($_GET['insert_user'])){
                         
                        include("insert_user.php");
                
                }if(isset($_GET['user_profile'])){
                         
                        include("user_profile.php");
                
                }if(isset($_GET['view_message'])){
                         
                        include("view_message.php");
                
                }if(isset($_GET['delet_message'])){
                         
                        include("delet_message.php");
                
                }

                
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>

<?php } ?>