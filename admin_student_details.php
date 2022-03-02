
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

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

 <?php
 include "navadmin.php";
 ?>
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
                    <h3 class="text-primary">Student Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="admin_student_details.php">Student Details</a></li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Student Details</h4>
                               
                                <a href="add_stud.php" class="btn btn-success" style="margin-left:400px;margin-bottom:100px">Add New Student</a>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Picture</th>
                                                <th>Semester</th>
                                                <th>Department</th>
                                                <th>Password</th>

                                              
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                $i = 1;
                                                $get_student_data = "select * from profile ";
                                                $run_student_data = mysqli_query($conn,$get_student_data);
                                                while($row_student_data = mysqli_fetch_array($run_student_data))
                                                {


                                             ?>
                                            <tr>
                                                <td><?php echo $row_student_data['id']; ?></td>
                                                <td><a href="delete_student.php?student_id=<?php echo $row_student_data['id']; ?>"><span class="label label-danger">Delete</span></a></td>

                                                <td><a href="edit_student.php?student_id=<?php echo $row_student_data['id']; ?>"><span class="label label-primary">Edit</span></a></td>
                                                <td><?php echo $row_student_data['name']; ?></td>
                                                <td><?php echo $row_student_data['telephone']; ?></td> 
                                                <td><img style="border-radius:50%;" src="<?php echo $row_student_data['picture']; ?>" width="100"></td>
                                               
                                                <td><?php echo $row_student_data['semester']; ?></td>
                                           
                                                <td><?php echo $row_student_data['department']; ?></td>
                                                <td><?php echo $row_student_data['password']; ?></td>
                                   
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
