<?php 
include "connection.php";
//$conn = mysqli_connect('127.0.0.1:3325','root','','bgc');
    
    $studentid = $_GET['admin_id'];

    $delete_student = "delete from notice where notice_id = '$studentid'";
    if($run_delete = mysqli_query($conn,$delete_student)){
    	echo "<script>
    	      alert('Notice Deleted Successfully !!');
    	      window.open('admin_notice.php','_self');
         </script>

    	";
    }



 ?>