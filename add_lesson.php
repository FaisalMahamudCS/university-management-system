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

               <?php
               include 'navadmin.php';
               ?>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="card-title">Add New lessons</h4>
                                <h6 class="card-subtitle">You can add new admin here</h6>
                                
                                <form method="post" action="">
                                        
                                <p>Lesson Name</p>
                                    <input class="input form-control" placeholder="Enter  Name" type="text" name="name" required><br>
                                    <p>Lesson Description</p>
                                    <input class="input form-control" placeholder="" type="text" name="desc" required >
                                   <br>
                                    <p>Lesson Link</p>
                                    <input class="input form-control" placeholder="Enter lesson link" type="text" name="link" required>
                                   
                                    <br>
                                    <p>Course ID</p>
                                    <input class="input form-control" placeholder="Enter Course ID" type="text" name="course_id" required>
                                   
                                    <br>
                                    <p>Course Name</p>
                                    <input class="input form-control" placeholder="Enter Course Name" type="text" name="course_name" required>
                                   
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
        $lesson_name=$_POST['name'];
        $desc=$_POST['desc'];
        $link=$_POST['link'];
$course_id=$_POST['course_id'];
$course_name=$_POST['course_name'];
        
        $insert_admin = "insert into lesson(lesson_name,lesson_desc,lesson_link,course_id,course_name) values('$lesson_name','$desc','$link','$course_id','$course_name')";
        if($run_insert_admin = mysqli_query($conn,$insert_admin)){
            echo "<script>
                alert('Lesson Inserted Successfully !!');
                window.open('lessonadmin.php','_self')
            </script>";
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