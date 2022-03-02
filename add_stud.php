
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

<div id="main-wrapper">
<?php
 include "navadmin.php";
 ?>
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
             
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-img.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        
                        <!-- Messages -->
                        
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    
                                   
                                    <li><a href="form-submissions.php"><i class="fa fa-wpforms"></i>Submissions</a></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-secondary">Add New Student</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="admin_student_details.php">Student Details</a></li>
                        <li class="breadcrumb-item active"><a href="add_stud.php">Add New Student</a></li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
                


                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                
                                <form method="post" action="" enctype="multipart/form-data">
                                <p>ID</p>
                                    <input class="input form-control" placeholder="Enter  id" type="text" name="id" required><br>
                                    
                                <p>Name</p>
                                    <input class="input form-control" placeholder="Enter  Name" type="text" name="name" required><br>
                                  
                                   
                                    <p>Telephone No</p>
                                    <input class="input form-control" placeholder="Enter Style Name" type="text" name="telephone" required><br>
                                    
                                    <p>Select  Image</p>
                                    <input class="input form-control" type="file" name="teacher_image">
                                    <br>
                                    <p>Semester</p>
                                    <input class="input form-control" placeholder="Enter Semester Name" type="text" name="semester" required>
                                    <br>

  <p>department</p>
    <select name='' class='form-control ' id='language' name="department" style='' >
<?php
include "connection.php";

$sql="SELECT * FROM department";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
  

?>

    <option value='<?php echo $row['name']; ?>'><?php echo $row['name']; ?></option>
    <?php
}
?>
    </select>
    




                                  
                                    <p>Password</p>
                                    <input class="input form-control" placeholder="Enter  Password" type="password" name="password" required>
                                    <br>
                                    <input class="btn btn-block btn-success" type="submit" name="add" value="Add">

                                </form>
                            </div>
                    
                </div>
</div>

                
                

<?php 


      if(isset($_POST['add']))
      {
          $id=$_POST['id'];
        $name=$_POST['name'];

        $telephone=$_POST['telephone'];
        $semester=$_POST['semester'];
        $department=$_POST['department'];
        $password=$_POST['password'];
         

        if($_FILES['teacher_image']['name'] == '')
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
 
         
       $insert_teacher = "insert into profile(id,name,telephone,picture,semester,department,password) values('$id','$name','$telephone','$teacher_image','$semester','$department','$password')";
        if($run_insert_teacher = mysqli_query($conn,$insert_teacher)){
            echo "<script>
                alert('Student Inserted Successfully !!');
                window.open('adminprocess.php','_self')
            </script>";
        }

        
        else{
           echo "<script>alert('Student is already in database !!');</script>";
        }
      }

 ?>
</body>
</html>