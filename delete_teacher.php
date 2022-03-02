<?php 
include "connection.php";
    
    $teacher_id = $_GET['teacher_id'];

    $delete_teacher = "delete from teach where id = '$teacher_id'";
    if($run_delete = mysqli_query($conn,$delete_teacher)){
    	echo "<script>
    	      alert('Teacher Deleted Successfully !!');
    	      window.open('admin_teacher_details.php','_self');
         </script>

    	";
    }



 ?>