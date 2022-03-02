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
    include 'navadmin.php';
    
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
                            $conn = mysqli_connect('127.0.0.1:3325','root','','bgc');

$teacher_id = $_GET['admin_id'];
$get_teachers_data = "select * from skill where id = '$teacher_id'";
$run_teachers_data = mysqli_query($conn,$get_teachers_data);
$row_teachers_data = mysqli_fetch_array($run_teachers_data);


?>
                                
                                <h4 class="card-title">Edit Course <?php echo $row_teachers_data['course_name']; ?></h4>
                             
                                <form method="post" action="" enctype="multipart/form-data">
                                    
                                <p>Enter Course Name</p>
                                    <input class="input form-control" placeholder="Enter  Name" type="text" name="name" value="<?php echo $row_teachers_data['course_name']; ?>" required><br>
                                    <p>Course Description</p>
                                    <input class="input form-control" placeholder="Enter Teacher Name" type="text" name="course_desc" value="<?php echo $row_teachers_data['course_desc']; ?>" required >
                                   <br>
                                    <p>Course Duration</p>
                                    <input class="input form-control" placeholder="Enter Style Name" type="text" name="course_duration" value="<?php echo $row_teachers_data['course_duration']; ?>" required>
                                   
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
          $name=$_POST['name'];
          $course_desc=$_POST['course_desc'];
          $course_duration=$_POST['course_duration'];
     

   /*   if($_FILES['teacher_image']['name'] == '')
       {
           $teacher_image = '';
       }
       else{
            
        $teacher_image = $_POST['teacher_image'];
            $teacher_image = $_FILES['teacher_image']['name'];
            $teacher_image = preg_replace("/\s+/","_",$teacher_image);
            $image_tmp = $_FILES['teacher_image']['tmp_name'];
            $teacher_image_ext = pathinfo($teacher_image,PATHINFO_EXTENSION);
      $teacher_image = pathinfo($teacher_image,PATHINFO_FILENAME);
      
      $teacher_image = $teacher_image."_".date("mjYHis").".".$teacher_image_ext;
      
            move_uploaded_file($image_tmp,"$teacher_image");
       }

       */

      $update_teachers = "update skill set course_name = '$name' ,course_desc='$course_desc',course_duration='$course_duration'  where id= '$teacher_id'";
      if($run_update_teachers = mysqli_query($conn,$update_teachers)){
          echo "<script>
              alert('Course Edited Successfully !!');
              window.open('courseadmin.php','_self')
          </script>";
      }
    }



 ?>
</body>
</html>