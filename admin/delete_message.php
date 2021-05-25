<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_message'])){
        
        $delete_id = $_GET['delete_message'];
        
        $delete_message = "DELETE from message where mess_id='$delete_id'";
        
        $run_delete = mysqli_query($conn,$delete_message);
        
        if($run_delete){
            
            echo "<script>alert('One of your costumer order has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_orders','_self')</script>";
            
        }
        
    }

?>

<?php } ?>