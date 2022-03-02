<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
include "navadmin.php";

?>
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Teacher Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="admin_teacher_details.php">Teacher Details</a></li>
                        <li class="breadcrumb-item active"><a href="#">Edit Teacher</a></li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php
                            include "connection.php";
                           // $conn = mysqli_connect('127.0.0.1:3325','root','','bgc');



?>
                                
                                <form method="post" action="" enctype="multipart/form-data">
                                    
                                <p>Notice Name</p>
                                    <input class="input form-control" placeholder="Enter Notice Name" type="text" name="notice_name"  required><br>
                                 
                                    <p>Select New PDF</p>
                                    <input class="input form-control" type="file" name="image" >
                                    <br>
                                    
                                    <input class="btn btn-block btn-success" type="submit" name="update" value="Add Notice">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 
//$conn = mysqli_connect('127.0.0.1:3325','root','','bgc');

      if(isset($_POST['update']))
      {
      $notice_name=$_POST['notice_name'];
        $image = $_FILES['image']['name'];
        // Get text
      
  
      
  
  
        // image file directory
        $target =basename($image);
       // $target="C:/xampp/htdocs/dashboard/working_file/".basename($image);
        $target=basename($image);
      
        $sql = "INSERT INTO notice(notice_name,link) VALUES ('$notice_name','$image')";
        // execute query
        $result=mysqli_query($conn, $sql);
  
        if($result) {
    
            
            echo "<script>
            alert('Notice Added Successfully !!');
            window.open('admin_notice.php','_self');
       </script>

      ";
        }else{
            
        }
      
      
    }


 ?>
</body>
</html>