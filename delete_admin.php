<?php 
include "connection.php";
    
    $admin_id = $_GET['admin_id'];

    $delete_teacher = "delete from admintbl where id = '$admin_id'";
    if($run_delete = mysqli_query($conn,$delete_teacher)){
    	echo "<script>
    	      alert('Teacher Deleted Successfully !!');
    	      window.open('admin_info.php','_self');
         </script>

    	";
    }



 ?>