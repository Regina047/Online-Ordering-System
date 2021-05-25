<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_m_cats'])){
        
        $delete_m_cats_id = $_GET['delete_m_cats'];
        
        $delete_m_cat = "DELETE from menu_categories where m_cat_id='$delete_m_cats_id'";
        
        $run_delete = mysqli_query($conn,$delete_m_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of Your Product Category Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_m_cats','_self')</script>";
            
        }
        
    }

?>




<?php } ?>