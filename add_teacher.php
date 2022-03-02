<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


    
</head>


<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="images/favicon.ico" alt="homepage" class="dark-logo" /></b>
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
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
               
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add New Teacher</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="teacher_details.php">Teacher Details</a></li>
                        <li class="breadcrumb-item active"><a href="add_teacher.php">Add New Teacher</a></li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="card-title">Add New Teacher</h4>
                                <h6 class="card-subtitle">You can add new teacher here</h6>
                                
                                <form method="post" action="" enctype="multipart/form-data">
                                    
                                <p>Name</p>
                                    <input class="input form-control" placeholder="Enter  Name" type="text" name="name" required><br>
                                    <p>Teacher Name</p>
                                    <input class="input form-control" placeholder="Enter Teacher Name" type="text" name="teacher_name" required>
                                   <br>
                                    <p>Style</p>
                                    <input class="input form-control" placeholder="Enter Style Name" type="text" name="style" required>
                                    <p>Teacher Name</p>
                                    <input class="input form-control" placeholder="Enter Qualification" type="text" name="qualification" required>
                                    <br>
                                    <p>Select Teacher Image</p>
                                    <input class="input form-control" type="file" name="teacher_image">
                                    <br>
                                    <p>Teacher Email</p>
                                    <input class="input form-control" placeholder="Enter Teacher Email" type="email" name="teacher_email" required>
                                    <br>
                                    <p>Teacher Password</p>
                                    <input class="input form-control" placeholder="Enter Teacher Password" type="password" name="teacher_pass" required>
                                    <br>
                                    <input class="btn btn-block btn-success" type="submit" name="add" value="Add">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 
      if(isset($_POST['add']))
      {
          $style=$_POST['style'];
          $qualifiacation=$_POST['qualification'];
          $name=$_POST['name'];
        $teacher_email = $_POST['teacher_email'];
        $teacher_pass = $_POST['teacher_pass'];
        $teacher_name = $_POST['teacher_name'];
        

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

        $check_previous = "select * from teach where gmail = '$teacher_email'";
        $run_check_previous = mysqli_query($con,$check_previous);
        $row_check = mysqli_num_rows($run_check_previous);
        if($row_check==0)
        {
        $insert_teacher = "insert into teach(name,photo,Style,qualification,password,gmail,teachername) values('$name','$teacher_image','$style','$qualification','$teacher_pass','$teacher_email','$teacher_name')";
        if($run_insert_teacher = mysqli_query($conn,$insert_teacher)){
            echo "<script>
                alert('teacher Inserted Successfully !!');
                window.open('teacher_details.php','_self')
            </script>";
        }

        }
        else{
           echo "<script>alert('Teacher is already in database !!');</script>";
        }
      }

 ?>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
 

</body>

</html>