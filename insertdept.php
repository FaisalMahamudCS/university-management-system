
<?php
session_start();

// Create connection

include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="STUDENT" content="">
    <style>
    li{
      list-style-type: none;
    }
    .card {
    background: #ffffff none repeat scroll 0 0;
    margin: 15px 0;
    padding: 20px;
    border: 0 solid #e7e7e7;
    border-radius: 5px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}
.p-30 {
    padding: 30px !important;
}
.media {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
}
.color-danger, .text-danger {
    color: #fc6180;
}
.f-s-40 {
    font-size: 40px !important;
}
.media-text-right {
    text-align: right;
}
.media-body {
    vertical-align: middle;
}
.media-body {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
    </style>

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php"> Admin Panel</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <!--<li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Logout</a>
            
          </div>
        </li>
      </ul>
      <li class="nav-item">
          <a class="nav-link" href="admin.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_info.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Admin Info</span></a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="admin_teacher_details.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Teacher details</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studentlogform.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Student Login</span></a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Tutorials</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Register.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Register</span></a>
        </li>
       
        
    </nav>
<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background-image: linear-gradient(#009999, #014923);">
        <li class="nav-item">
          <a class="nav-link"href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span style="text-shadow: 0px 1px 5px black;">Home</span>
          </a>
        </li>
       <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw  fa-cloud"></i>
            <span>SERVICES</span>
         </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item " href="urns.php">URNS</a> 
            <a class="dropdown-item " href="caskets.php">CASKETS</a>
            <a class="dropdown-item " href="vehicles.php">VEHICLES</a>
          </div>-->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Syllebus.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Syllebus</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../skill.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Skill Set</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_info.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Admin Info</span></a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="attendance.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Attendance</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="enrollment.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Enrollment</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Schedule</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
      
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
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
            <div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Admins</h4>
                                <h6 class="card-subtitle">Below is list of all admins</h6>
                                <a href="add_admin.php" class="btn btn-success">Add New Admin</a>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                                <th>Admin Email</th>
                                                <th>Admin Password</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                $i = 1;
                                                $get_admin_data = "select * department";
                                                $run_admin_data = mysqli_query($conn,$get_admin_data);
                                                while($row_admin_data = mysqli_fetch_array($run_admin_data))
                                                {


                                             ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><a href="delete_department.php?admin_id=<?php echo $row_admin_data['id']; ?>"><span class="label label-danger">Delete</span></a></td>
                                                <td><a href="edit_admin.php?admin_id=<?php echo $row_admin_data['id']; ?>"><span class="label label-primary">Edit</span></a></td>
                                                <td><?php echo $row_admin_data['email']; ?></td>
                                                <td><?php echo $row_admin_data['password']; ?></td>
                                         <?php $i++;  } ?>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    
                </div>
</div>

                


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            
        </div>
        <!-- End Page wrapper  -->
    </div>
                </div>

                </div>
 
   
   </div>
 </div>
   
  </div>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
