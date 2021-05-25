<?php
session_start();

include_once("includes/db_conn.php");
include("functions/function.php");
 ?>

 <?php


if(isset($_GET['pro_id'])){

  $pro_id = $_GET['pro_id'];

  $get_products = "SELECT * from menu where menu_id='$pro_id'";

  $run_products = mysqli_query($conn, $get_products);

  $row_menu = mysqli_fetch_array($run_products);

  $p_cat_id =  $row_menu['m_cat_id'];

  $pro_title =  $row_menu['menu_title'];

  $pro_price =  $row_menu['menu_price'];
 
  $pro_desc =  $row_menu['menu_desc'];
 
  $pro_img1 =  $row_menu['menu_img1'];

    $get_p_cat = "SELECT * from menu_categories where m_cat_id='$p_cat_id' ";

    $run_p_cat =  mysqli_query($conn, $get_p_cat);

     $row_p_cat = mysqli_fetch_array($run_p_cat);

     $p_cat_title = $row_p_cat['m_cat_title'];

}

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
  
 
<
</head>
<body>
  <div id="top"> <!---Top begin --->
    <div class="container"> <!---container begin --->
         <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">
                   
                   <?php 
              
                   
                   if(!isset($_SESSION['cust_username'])){

                     echo "Welcome: Guest";
                       
                   }else{
                                           
                       
                       echo "Welcome: " . $_SESSION['cust_username'] . "";


                       
                   }
                   
                   ?>
                   
               </a>
               <a href="checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
               
           </div><!-- col-md-6 offer Finish -->
          <div class="col-md-6">  <!---col-min-6 begin --->
            <ul class="menu"> <!---cmenu begin--->
              <li>
                <a href="customer_register.php">Register</a>
              </li>
              <li>
                <a href="customer/my_account.php">My Account</a>
              </li>
              <li>
                <a href="cart.php">Go to Cart</a>
              </li>              
              <li>
                <a href="checkout.php">
                  <?php 

                   if(!isset($_SESSION['cust_username'])){
                        echo "<a href='checkout.php'>Customer Login</a>" ;
                      }else{
                        echo "<a href='logout.php'>Logout</a>";
                      }

                  ?>
                </a>
              </li>

              <li>
                <a href="admin/login.php">Admin Login</a>
              </li>
            </ul> <!---cmenu finish --->
          </div>  <!---col-min-6 finish --->
    </div> <!---container finish --->
  </div> <!---Top finish --->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="iconic_plate_store/img/iconic.jpg" alt="iconicplate Logo" >
                   <img src="iconic_plate_store/img/iconic.jpg" alt="iconicplate Logo" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
              




               
               <button class="navbar-toggle" name="search" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search" name="search">
                    
                    <?php

                    if(isset($_GET['search'])){

                      $searchkey=$_GET['search'];

                      echo "Success search for {$search}";
                    }


                    ?>
                     





                   </i>
                   
               </button>
               
          
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="<?php if($active=='Home')  echo"active";?>">
                           <a href="index.php">Home</a>
                       </li>
                      <li class="<?php if($active=='Shop')  echo"active";?>">
                           <a href="shop.php">Menu</a>
                       </li>
                       <li class="<?php if($active=='Account')  echo"active";?>">
                            <?php

                           if(!isset($_SESSION['cust_username'])){

                            echo "<a href='checkout.php'>My Account</a>";

                           }else{

                             echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

                           }


                            ?>
                       </li>
                       <li class="<?php if($active=='Cart')  echo"active";?>">
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li class="<?php if($active=='Contact')  echo"active";?>">
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php echo items(); ?> Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                 
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->

    <script src="js/bootstrap-337.min"></script>
  <script src="js/jquery-331.min.js"></script>
</body>
</html>
   
