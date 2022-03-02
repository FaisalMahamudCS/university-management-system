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
    <?php include 'navadmin.php'?>
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
              
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
                            $conn = mysqli_connect('127.0.0.1:3325','root','','bgc');

$teacher_id = $_GET['lesson_id'];
$get_teachers_data = "select * from lesson where lesson_id = '$teacher_id'";
$run_teachers_data = mysqli_query($conn,$get_teachers_data);
$row_teachers_data = mysqli_fetch_array($run_teachers_data);


?>
                                
                                <h4 class="card-title">Lesson '<?php echo $row_teachers_data['lesson_name']; ?>'</h4>
                          
                                
                                
                                <form method="post" action="" enctype="multipart/form-data">
                                    
                                <p>Lesson Name</p>
                                    <input class="input form-control" placeholder="Enter  Name" type="text" name="name" value="<?php echo $row_teachers_data['lesson_name']; ?>" required><br>
                                    <p>Lesson Description</p>
                                    <input class="input form-control" placeholder="" type="text" name="desc" value="<?php echo $row_teachers_data['lesson_desc']; ?>" required >
                                   <br>
                                    <p>Lesson Link</p>
                                    <input class="input form-control" placeholder="Enter Style Name" type="text" name="link" value="<?php echo $row_teachers_data['lesson_link']; ?>" required>
                                   
                                    <br>
                                    
                                    <input class="btn btn-block btn-success" type="submit" name="update" value="Update">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 

include "connection.php";

      if(isset($_POST['update']))
      {
          $lesson_name=$_POST['name'];
$desc=$_POST['desc'];
$link=$_POST['link'];
        
       

       

      $update_teachers = "update lesson set lesson_name = '$lesson_name' ,lesson_desc='$desc',lesson_link='$link' where lesson_id= '$teacher_id'";
      if($run_update_teachers = mysqli_query($conn,$update_teachers)){
          echo "<script>
              alert('Lesson Edited Successfully !!');
              window.open('lessonadmin.php','_self')
          </script>";
      }
    }



 ?>
</body>
</html>