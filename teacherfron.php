<?php
session_start();
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

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



  </head>

  <body id="page-top">
<?php
include "navteacher.php";
?>
 
   
            
    <div class="container-fluid " style="margin-top: 100px;">
    <div class="row">
    <?php 
                     include "connection.php";
                     $get_admins = "select * from admintbl";
                     $run_admins = mysqli_query($conn,$get_admins);
                     $count_admins = mysqli_num_rows($run_admins);

                 ?>
                                <div class="col-md-4">
                     <a href="teacher_course.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 color-warning"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2><?php echo $count_admins?></h2>
                                <p class="m-b-0">Classes</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php 
                     include "connection.php";
                     $get_admins = "select * from profile";
                     $run_admins = mysqli_query($conn,$get_admins);
                     $count_admins = mysqli_num_rows($run_admins);

                 ?>

                                 <div class="col-md-4">
                     <a href="studentdetails.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 color-warning"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                            <h2><?php echo $count_admins?></h2>
                                <p class="m-b-0">Students</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <?php 
                     include "connection.php";
                     $id=$_SESSION['teacher_id'];
                     $get_admins = "select * from assignment where teacher_id='$id' ";
                     $run_admins = mysqli_query($conn,$get_admins);
                     $count_admins = mysqli_num_rows($run_admins);

                 ?>

                                 <div class="col-md-4">
                     <a href="asslist.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 color-warning"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                            <h2><?php echo $count_admins?></h2>
                                <p class="m-b-0">Assignment</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

    
                                <div class="col-md-4">
                     <a href="admin_teacher_details.php">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-book f-s-40 color-primary"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>1</h2>
                                <p class="m-b-0">Department</p>
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