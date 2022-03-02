<?php 
include "connection.php";
//$conn = mysqli_connect('127.0.0.1:3325','root','','bgc');
    
    $studentid = $_GET['student_id'];

    $delete_student = "delete from profile where id = '$studentid'";
    if($run_delete = mysqli_query($conn,$delete_student)){
    	echo "<script>
    	      alert('Student Deleted Successfully !!');
    	      window.open('admin_student_details.php','_self');
         </script>

    	";
    }



 ?>