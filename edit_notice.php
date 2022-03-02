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
<?php
include "navadmin.php";

?>
<div class="page-wrapper">
            <!-- Bread crumb -->
           
<div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php
                     
include "connection.php";

$teacher_id = $_GET['admin_id'];
$get_teachers_data = "select * from notice where notice_id = '$teacher_id'";
$run_teachers_data = mysqli_query($conn,$get_teachers_data);
$row_teachers_data = mysqli_fetch_array($run_teachers_data);


?>
                                
                                <h4 class="card-title">Edit Notice <?php echo $row_teachers_data['notice_name']; ?></h4>
                                
                                
                                
                                <form method="post" action="" enctype="multipart/form-data">
                                    
                                <p>Notice Name</p>
                                    <input class="input form-control" placeholder="Enter Notice Name" type="text" name="notice_name" value="<?php echo $row_teachers_data['notice_name']; ?>" required><br>
                                 
                                    <p>Select New PDF</p>
                                    <input class="input form-control" type="file" name="teacher_image" >
                                    <br>
                                    
                                    <input class="btn btn-block btn-success" type="submit" name="update" value="Update">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 
$conn = mysqli_connect('127.0.0.1:3325','root','','bgc');

      if(isset($_POST['update']))
      {
      
          $notice_name=$_POST['notice_name'];


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

       

      $update_teachers = "update notice set notice_name = '$notice_name'   where notice_id= '$teacher_id'";
      if($run_update_teachers = mysqli_query($conn,$update_teachers)){
          echo "<script>
              alert('Teacher Edited Successfully !!');
              window.open('admin_notice.php','_self')
          </script>";
      }
    }



 ?>
</body>
</html>