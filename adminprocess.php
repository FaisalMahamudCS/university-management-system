
<?php
session_start();

include "connection.php";


if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
    
   // echo $password;
    //echo $id;

$query="SELECT * from  admintbl where email='$id' && password='$password'";
if (mysqli_query($conn, $query)) {
   
    $_SESSION['id']=$id;

    
    // echo "<h2 class='alert alert-success'>welcome success<h2>";

} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}


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
 <div id="wrapper">

     
      <div id="content-wrapper">

        <div class="container-fluid">
        <!-- /.container-fluid -->

       

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
    <div class="container-fluid mt-5">
    <div class="row">
    <?php 
                     
                     $get_admins = "select * from admintbl";
                     $run_admins = mysqli_query($conn,$get_admins);
                     $count_admins = mysqli_num_rows($run_admins);

                 ?>
                <div class="col-md-4">
                     <a href="admin_info.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php echo $count_admins; ?></h2>
                                <p class="m-b-0">Admins</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php 
                     
                   //  $get_classes = "select * from classes";
                     //$run_classes = mysqli_query($conn,$get_classes);
                    // $count_classes = mysqli_num_rows($run_classes);

                 ?>
                <div class="col-md-4">
                     <a href="all_classes.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 color-warning"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php //echo $count_classes; ?>10</h2>
                                <p class="m-b-0">Classes</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php 
                     
                     $get_students = "select * from profile";
                     $run_students = mysqli_query($conn,$get_students);
                     $count_students = mysqli_num_rows($run_students);

                 ?>
                 <div class="col-md-4">
                     <a href="admin_student_details.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 color-warning"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php echo $count_students; ?></h2>
                                <p class="m-b-0">Students</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php 
                     
                     $get_students = "select * from skill";
                     $run_students = mysqli_query($conn,$get_students);
                     $count_students = mysqli_num_rows($run_students);

                 ?>
                 <div class="col-md-4">
                     <a href="courseadmin.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-certificate f-s-40 " style="color:red"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php echo $count_students; ?></h2>
                                <p class="m-b-0">Course</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php 
                     
                     $get_students = "select * from notice";
                     $run_students = mysqli_query($conn,$get_students);
                     $count_students = mysqli_num_rows($run_students);

                 ?>
                 <div class="col-md-4">
                     <a href="admin_notice.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-bell f-s-40 " style="color:green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php echo $count_students; ?></h2>
                                <p class="m-b-0">Notice</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php 
                     
                     $get_students = "select * from resultmain";
                     $run_students = mysqli_query($conn,$get_students);
                     $count_students = mysqli_num_rows($run_students);

                 ?>
                 <div class="col-md-4">
                     <a href="admin_result.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-list-alt f-s-40 color-warning" style="color:green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php echo $count_students; ?></h2>
                                <p class="m-b-0">Result</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php 
                     
                     $get_students = "select * from lesson";
                     $run_students = mysqli_query($conn,$get_students);
                     $count_students = mysqli_num_rows($run_students);

                 ?>
                 <div class="col-md-4">
                     <a href="lessonadmin.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-graduation-cap f-s-40 " style="color:green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php echo $count_students; ?></h2>
                                <p class="m-b-0">Lesson</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php 
                     
                     $get_teachers = "select * from teach";
                     $run_teachers = mysqli_query($conn,$get_teachers);
                     $count_teachers = mysqli_num_rows($run_teachers);

                 ?>
                <div class="col-md-4">
                     <a href="admin_teacher_details.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-book f-s-40 color-primary"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php echo $count_teachers; ?></h2>
                                <p class="m-b-0">Teachers</p>
                            </div>
                        </div>
                    </div>
                    </a>
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
