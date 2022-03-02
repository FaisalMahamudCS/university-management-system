
<?php
session_start();


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


  </head>

  <body id="page-top">

 <?php
 include 'navadmin.php';
 ?>

      
      <div id="content-wrapper">

        <div class="container-fluid">
        
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
                    <h3 class="text-primary">Lesson Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="indexmain.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="lessonadmin.php">Lesson Details</a></li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Lessons</h4>
                               
                                <a href="add_lesson.php" class="btn btn-success  ">Add New Lesson</a>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover  table-bordered" cellspacing="0" width="100%">
                                        <thead class="bg-success text-light"> 
                                            <tr>
                                                <th>No.</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                                <th>Lesson  name</th>
                                          
                                               
                                                <th>Lesson description</th>
                                                <th>Lesson Link</th>
                                                <th>Course Id</th>
                                                <th>Course Name</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                $i = 1;
                                                $get_admin_data = "select * from lesson order by 1 desc";
                                                $run_admin_data = mysqli_query($conn,$get_admin_data);
                                                while($row_admin_data = mysqli_fetch_array($run_admin_data))
                                                {


                                             ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><a href="delete_lesson.php?lesson_id=<?php echo $row_admin_data['lesson_id']; ?>"><span class="label label-danger">Delete</span></a></td>
                                                <td><a href="edit_lesson.php?lesson_id=<?php echo $row_admin_data['lesson_id']; ?>"><span class="label label-primary">Edit</span></a></td>
                                               
                                                <td><?php echo $row_admin_data['lesson_name']; ?></td>
                                               
                                                <td><?php echo $row_admin_data['lesson_desc']; ?></td>
                                                <td><?php echo $row_admin_data['lesson_link']; ?></td>
                                                <td><?php echo $row_admin_data['course_id']; ?></td>
                                                <td><?php echo $row_admin_data['course_name']; ?></td>
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


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  </body>

</html>
