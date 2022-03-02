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
        
                                
                              
                             
                                <form method="post" action="" enctype="multipart/form-data">
                                    
                                <p>Enter Course Name</p>
                                    <input class="input form-control" placeholder="Enter Course  Name" type="text" name="name" required><br>
                                    <p>Course Description</p>
                                    <input class="input form-control" placeholder="Enter Course Description" type="text" name="course_desc"  required >
                                   <br>

                                    <p>Course Duration</p>
                                    <input class="input form-control" placeholder="Enter Course Duration" type="text" name="course_duration" required>
                                   
                                    <br>
                                       
                                    <p>Course Price</p>
                                    <input class="input form-control" placeholder="Enter Course Price" type="text" name="course_price" required>
                                   
                                    <br>
                                   <p>Course Image</p>
                                   <input class="input form-control" type="file" name="teacher_image">
                                 
                                    <input class="btn btn-block btn-success" type="submit" name="add" value="add">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 
//$conn = mysqli_connect('127.0.0.1:3325','root','','bgc');
include "connection.php";
      if(isset($_POST['update']))
      {
          $name=$_POST['name'];
          $course_desc=$_POST['course_desc'];
          $course_duration=$_POST['course_duration'];
     $course_price=$_POST['course_price'];

   
          $insert_teacher = "insert into skill(course_name,course_desc,course_duration,Price) values('$name','$course_desc','$course_duration','$course_price')";

      if($run_update_teachers = mysqli_query($conn,$insert_teacher)){
          echo "<script>
              alert('Course Edited Successfully !!');
              window.open('courseadmin.php','_self')
          </script>";
      }
    }



 ?>
</body>
</html>