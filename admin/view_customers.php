<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Costumers
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Customers
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> First Name: </th>
                                <th> Last Name: </th>
                                <th> Middle Name: </th>
                                <th> Province: </th>
                                <th> City: </th>
                                <th> Brangay: </th>
                                <th> Zipcode: </th>
                                <th> Contact No: </th>
                                <th> Email: </th>
                                <th> Image: </th>     
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_c = "SELECT * from customer";
                                
                                $run_c = mysqli_query($conn,$get_c);
          
                                while($row_c=mysqli_fetch_array($run_c)){
                                    
                                    $c_id = $row_c['cust_id'];
                                    
                                    $c_lastname = $row_c['cust_lastname'];
                                    $c_firstname = $row_c['cust_firstname'];
                                    $c_middlename = $row_c['cust_middlename'];

                                     $c_province = $row_c['cust_province'];

                                     $c_city = $row_c['cust_city'];

                                     $c_brgy = $row_c['cust_brgy'];

                                     $c_zipcode = $row_c['cust_zipcode'];

                                     $c_contactNo = $row_c['cust_contactNo'];

                                     $c_email = $row_c['cust_email'];
                                  
                                     $c_img = $row_c['cust_image'];
                                    
                                                                        
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $c_firstname; ?> </td>
                                <td> <?php echo $c_lastname; ?> </td>
                                <td> <?php echo $c_middlename; ?> </td>
                                <td> <?php echo $c_province; ?></td>
                                <td> <?php echo $c_city; ?></td>
                                <td> <?php echo $c_brgy; ?></td>
                                <td> <?php echo $c_zipcode; ?></td>
                                <td> <?php echo $c_contactNo; ?></td>
                                <td> <?php echo $c_email; ?> </td>
                                <td> <img src="../customer/customer_images/<?php echo $c_img; ?>" width="60" height="60"></td>
                                <td>
                                     
                                     <a href="index.php?delete_customer=<?php echo $c_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>