<?php
include "connection.php";

?>
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
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
    <title>Admin | climax student management system</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    
      
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Assign Teachers to a class</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="teacher_details.php">Teacher Details</a></li>
                        <li class="breadcrumb-item active"><a href="assign_teacher.php">Assign teachers to a class</a></li>
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
                                
                                <h4 class="card-title">Assign teachers to a class</h4>
                                <h6 class="card-subtitle">You can assign teachers to a particular class from here , and also can make a teacher incharge to a class</h6>
                                
                                <form method="post" action="">
                                    
                                    <p>Select Teacher</p>
                                    <select name="teacher_id" class="input form-control" required>
                                        <option value="">Select a Teacher</option>
                                        <?php 
                                            $get_teachers = "select * from teach order by 1 desc";
                                            $run_teachers  = mysqli_query($conn,$get_teachers);
                                            while($row_teachers = mysqli_fetch_array($run_teachers))
                                            {
                                        ?> 
                                        <option value="<?php echo $row_teachers['id']; ?>"><?php echo $row_teachers['teachername']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br>
                                    <p>Select Class</p>
                                    <select name="class_id" class="input form-control" required>
                                        <option value="">Select a class</option>
                                        <?php 
                                            $get_class = "select * from classes order by 1 desc";
                                            $run_class  = mysqli_query($conn,$get_class);
                                            while($row_class = mysqli_fetch_array($run_class))
                                            {
                                        ?> 
                                        <option value="<?php echo $row_class['class_id']; ?>"><?php echo $row_class['class_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br>  
                                    <p>Class incharge ?</p>
                                    <select name="is_incharge" class="input form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <br>                                   
                                  
                                    <input class="btn btn-block btn-success" type="submit" name="assign" value="Assign">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 
     if(isset($_POST['assign']))
     {
        $teacher_id = $_POST['teacher_id'];
        $class_id = $_POST['class_id'];
        $is_incharge = $_POST['is_incharge'];
        
        $check_previous  = "select * from assigned_teachers where teacher_id = '$teacher_id' and class_id = '$class_id'";
        $run_check_previous = mysqli_query($conn,$check_previous);
        $row_check_previous = mysqli_num_rows($run_check_previous);
        if($row_check_previous ==0)
        {
            


            $insert_data = "insert into assigned_teachers (teacher_id,class_id,is_incharge) values('$teacher_id','$class_id','$is_incharge')";

            $run_insert_data = mysqli_query($conn,$insert_data);

            $get_class_data = "select * from classes where class_id = '".$_POST['class_id']."'";
            $run_class_data = mysqli_query($conn,$get_class_data);
            $row_class_data = mysqli_fetch_array($run_class_data);

            $class_name = $row_class_data['class_name'];
            $notification = "Admin Assigned you ".$class_name;
            if($run_insert_data)
            {
                $insert_notification = "insert into notifications(reciever_id,notification,link,seen,send_to,time)values('$teacher_id','$notification','#','0','teacher',NOW())";
                $run_insert_notification = mysqli_query($con,$insert_notification);

                echo "<script>alert('Teacher Successfully Assigned to Class !!');</script>";
            }
        }
        else{
            echo "<script>alert('Already added in database!!');</script>";
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
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/dashboard1-init.js"></script>


    <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->

    <script src="js/custom.min.js"></script>

</body>

</html>