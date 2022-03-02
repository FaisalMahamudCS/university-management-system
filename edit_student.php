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
                    <h3 class="text-primary">Edit Student Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="admin_student_details.php">Student Details</a></li>
                        <li class="breadcrumb-item active"><a href="#">Edit Student</a></li>
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

$teacher_id = $_GET['student_id'];
$get_teachers_data = "select * from profile where id = '$teacher_id'";
$run_teachers_data = mysqli_query($conn,$get_teachers_data);
$row_teachers_data = mysqli_fetch_array($run_teachers_data);


?>
                                
                                <h4 class="card-title">Edit Student '<?php echo $row_teachers_data['name']; ?>'</h4>
                                <h6 class="card-subtitle">You can Student here</h6>
                                
                                <form method="post" action="" enctype="multipart/form-data">
                                <center>
                                    <img width="100" src="<?php echo $row_teachers_data['picture']; ?>">
                                    </center>
                                    
                                <p>ID</p>
                                    <input class="input form-control" placeholder="Enter  ID" type="text" name="id" value="<?php echo $row_teachers_data['id']; ?>" required><br>
                                    <p>Name</p>
                                    <input class="input form-control" placeholder="Enter Name" type="text" name="name" value="<?php echo $row_teachers_data['name']; ?>" required >
                                   <br>
                                    <p>telephone</p>
                                    <input class="input form-control" placeholder="Enter Telephone No" type="text" name="telephone" value="<?php echo $row_teachers_data['telephone']; ?>" required>
                                   
                                    <br>
                                    
                                   
                                 
                                    <p>Semester</p>
                                    <input class="input form-control" placeholder="Enter Semester" type="text" name="semester"  value="<?php echo $row_teachers_data['semester']; ?>" required>

                                    <p>Department</p>
                                    <input class="input form-control" placeholder="Enter Department" type="text" name="department"  value="<?php echo $row_teachers_data['department']; ?>" required> 
                                    <br>
                                    <p>Password</p>
                                    <input class="input form-control" placeholder="Enter  Password" type="password" value="<?php echo $row_teachers_data['password']; ?>" name="password" required>
                                    <br>
                                    <input class="btn btn-block btn-success" type="submit" name="update" value="Update">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 
$conn = mysqli_connect('127.0.0.1:3325','root','','bgc');

      if(isset($_POST['update']))
      {
        $id=$_POST['id'];
        $name=$_POST['name'];

        $telephone=$_POST['telephone'];
        $semester=$_POST['semester'];
        $department=$_POST['department'];
        $password=$_POST['password'];
         
        

     


       

      $update_teachers = "update profile set id=$id, name = '$name' ,telephone='$telephone',semester='$semester',department='$department',password='$password' where id='$teacher_id'";
      if($run_update_teachers = mysqli_query($conn,$update_teachers)){
          echo "<script>
              alert('Student Edited Successfully !!');
              window.open('admin_student_details.php','_self')
          </script>";
      }
    }



 ?>
</body>
</html>