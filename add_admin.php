<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


<![endif]-->

</head>

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
                    <h3 class="text-primary">Admin Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="admin_details.php">Admin Details</a></li>
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
                                
                                <h4 class="card-title">Add New Admin</h4>
                                <h6 class="card-subtitle">You can add new admin here</h6>
                                
                                <form method="post" action="">
                                    <p>Admin Email</p>
                                    <input class="input form-control" placeholder="Enter Admin Email" type="email" name="admin_email" required>
                                    <br>
                                    <p>Admin Password</p>
                                    <input class="input form-control" placeholder="Enter Admin Password" type="password" name="admin_pass" required>
                                    <br>
                                    <input class="btn btn-block btn-success" type="submit" name="add" value="Add">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 

include "connection.php";
      if(isset($_POST['add']))
      {
        $admin_email = $_POST['admin_email'];
        $admin_pass = $_POST['admin_pass'];

        $check_previous = "select * from admintbl where email = '$admin_email'";
        $run_check_previous = mysqli_query($conn,$check_previous);
        $row_check = mysqli_num_rows($run_check_previous);
        if($row_check==0)
        {
        $insert_admin = "insert into admintbl(email,password) values('$admin_email','$admin_pass')";
        if($run_insert_admin = mysqli_query($conn,$insert_admin)){
            echo "<script>
                alert('Admin Inserted Successfully !!');
                window.open('admin_info.php','_self')
            </script>";
        }

        }
        else{
           echo "<script>alert('Admin is already in database !!');</script>";
        }
      }

 ?>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            
        </div>
        <!-- End Page wrapper  -->
    </div>
 

</body>

</html>