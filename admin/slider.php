<?php
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
	<div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <div class="ol carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </div><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   <?php


                   $get_slides = "SELECT * from slider LIMIT 0,1";
                   $run_slides = mysqli_query($conn,$get_slides);

                   while($row_slides=mysqli_fetch_array($run_slides)){
                      $slide_name = $row_slides['slide_name'];
                      $slide_image = $row_slides['slide_image'];

                      echo "

                      <div class='item active'>

                        <img src='admin/slide_images/$slide_image' width='1860px' height='550px'>
                      </div>
                      

                      ";
                   }

                   $get_slides = "SELECT * from slider LIMIT 1,3";
                   $run_slides = mysqli_query($conn,$get_slides);

                   while($row_slides=mysqli_fetch_array($run_slides)){
                      $slide_name = $row_slides['slide_name'];
                      $slide_image = $row_slides['slide_image'];

                      echo "

                      <div class='item'>

                        <img class='img-responsive' src='admin/slide_images/$slide_image'>
                      </div>

                      ";
                   }


                    ?>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   
    

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>